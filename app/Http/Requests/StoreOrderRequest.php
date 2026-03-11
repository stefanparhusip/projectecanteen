<?php

namespace App\Http\Requests;

use App\Models\BreakTime;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() && ! auth()->user()->isAdmin();
    }

    public function rules(): array
    {
        return [
            'break_time_id' => ['required', 'exists:break_times,id'],
            'note' => ['nullable', 'string', 'max:255'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.menu_id' => ['required', 'integer', 'exists:menus,id'],
            'items.*.quantity' => ['required', 'integer', 'min:1', 'max:20'],
            // Optional idempotency key sent by the PWA offline queue (UUID v4, 36 chars).
            // When present, duplicate submissions with the same key return the existing order.
            'idempotency_key' => ['nullable', 'string', 'max:64'],
        ];
    }

    public function messages(): array
    {
        return [
            'break_time_id.required' => 'Pilih waktu pengambilan pesanan.',
            'break_time_id.exists' => 'Waktu pengambilan tidak valid.',
            'items.required' => 'Tambahkan minimal 1 menu ke pesanan.',
            'items.min' => 'Tambahkan minimal 1 menu ke pesanan.',
            'items.*.menu_id.exists' => 'Salah satu menu tidak ditemukan.',
            'items.*.quantity.min' => 'Jumlah setiap item minimal 1.',
            'items.*.quantity.max' => 'Jumlah setiap item maksimal 20.',
        ];
    }

    /**
     * Validasi tambahan setelah rules dasar lolos:
     * 1. Cek jam buka pemesanan (07:00 WIB).
     * 2. Cek apakah waktu pre-order sudah melewati deadline slot yang dipilih.
     */
    public function withValidator($validator): void
    {
        $validator->after(function ($v) {
            // 1. ── Jam buka pemesanan 07:00 ────────────────────────────────
            $openAt = \Carbon\Carbon::today()->setHour(7)->setMinute(0)->setSecond(0);
            if (now()->lt($openAt)) {
                $v->errors()->add(
                    'break_time_id',
                    'Pemesanan baru dibuka pukul 07:00. Silakan coba kembali setelah jam tersebut.'
                );

                return; // tidak perlu cek deadline jika pemesanan belum dibuka
            }

            // 2. ── Deadline per slot ────────────────────────────────────────
            $breakTimeId = $this->input('break_time_id');
            if (! $breakTimeId) {
                return;
            }

            $breakTime = BreakTime::find($breakTimeId);
            if (! $breakTime) {
                return;
            }

            $deadlineAt = $breakTime->deadlineToday();

            if (now()->gt($deadlineAt)) {
                $v->errors()->add(
                    'break_time_id',
                    "Batas waktu pre-order untuk {$breakTime->label} sudah lewat ".
                    "(deadline: {$deadlineAt->format('H:i')} WIB). ".
                    'Silakan pilih slot istirahat berikutnya.'
                );
            }
        });
    }
}
