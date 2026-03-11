<?php

namespace App\Console\Commands;

use App\Models\BalanceTransaction;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\RecurringOrder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateRecurringOrders extends Command
{
    protected $signature = 'orders:recurring';

    protected $description = 'Buat pesanan otomatis dari jadwal recurring order untuk hari ini';

    public function handle(): int
    {
        $jobs = RecurringOrder::with(['user', 'menu', 'breakTime'])
            ->active()
            ->forToday()
            ->get();

        $this->info("Memproses {$jobs->count()} recurring order untuk hari ini...");

        $created = 0;
        $skipped = 0;

        foreach ($jobs as $ro) {
            $result = $this->processOne($ro);
            $result ? $created++ : $skipped++;
        }

        $this->info("Selesai. Dibuat: {$created}, Dilewati: {$skipped}.");

        return self::SUCCESS;
    }

    /**
     * Proses satu recurring order dalam DB transaction.
     * Return true jika berhasil membuat order, false jika dilewati.
     */
    private function processOne(RecurringOrder $ro): bool
    {
        $success = false;

        try {
            DB::transaction(function () use ($ro, &$success) {
                // Lock baris menu dan user secara berurutan untuk mencegah race condition
                $menu = \App\Models\Menu::lockForUpdate()->find($ro->menu_id);
                $user = \App\Models\User::lockForUpdate()->find($ro->user_id);

                if (! $menu || ! $user) {
                    return; // soft-deleted — lewati
                }

                // Cek stok
                if ($menu->stock < $ro->qty) {
                    Log::warning("RecurringOrder #{$ro->id}: stok {$menu->name} tidak cukup ({$menu->stock} < {$ro->qty}).");

                    return;
                }

                $total = $menu->price * $ro->qty;

                // Cek saldo
                if ((float) $user->balance < (float) $total) {
                    Log::warning("RecurringOrder #{$ro->id}: saldo user #{$user->id} tidak cukup.");

                    return;
                }

                // Buat order
                $order = Order::create([
                    'user_id' => $user->id,
                    'break_time_id' => $ro->break_time_id,
                    'status' => Order::STATUS_PENDING,
                    'total_price' => $total,
                    'note' => 'Pesanan otomatis (recurring)',
                    'ordered_at' => now(),
                ]);

                // Buat order item
                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'menu_name' => $menu->name,
                    'menu_price' => $menu->price,
                    'quantity' => $ro->qty,
                    'subtotal' => $total,
                ]);

                // Kurangi stok
                $menu->decrement('stock', $ro->qty);

                // Potong saldo user
                $balanceBefore = (float) $user->balance;
                $user->decrement('balance', $total);
                $user->refresh();

                // Catat transaksi saldo
                BalanceTransaction::create([
                    'user_id' => $user->id,
                    'order_id' => $order->id,
                    'type' => BalanceTransaction::TYPE_DEBIT,
                    'amount' => $total,
                    'balance_before' => $balanceBefore,
                    'balance_after' => (float) $user->balance,
                    'description' => "Pembayaran pesanan otomatis #{$order->id}",
                ]);

                // Tandai kapan terakhir dijalankan
                $ro->update(['last_run_at' => now()]);

                $success = true;
            });
        } catch (\Throwable $e) {
            Log::error("RecurringOrder #{$ro->id} gagal: ".$e->getMessage());
        }

        return $success;
    }
}
