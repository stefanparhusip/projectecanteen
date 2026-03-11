<?php

namespace App\Console\Commands;

use App\Models\Backup;
use App\Services\BackupService;
use Illuminate\Console\Command;

class BackupRestore extends Command
{
    protected $signature = 'backup:restore
        {backup : ID of the backup record to restore}
        {--force : Skip the interactive confirmation prompt}';

    protected $description = 'Restore the database from an encrypted backup file (DESTRUCTIVE — overwrites current data)';

    public function handle(BackupService $service): int
    {
        $backup = Backup::find($this->argument('backup'));

        if (! $backup) {
            $this->error("No backup found with ID [{$this->argument('backup')}].");

            return self::FAILURE;
        }

        if ($backup->status !== 'completed') {
            $this->error("Backup #{$backup->id} has status [{$backup->status}] — cannot restore.");

            return self::FAILURE;
        }

        // Show summary
        $this->table(['Field', 'Value'], [
            ['ID',        $backup->id],
            ['Driver',    $backup->driver],
            ['Filename',  $backup->filename],
            ['Size',      $backup->human_size],
            ['Created',   $backup->created_at->format('Y-m-d H:i:s')],
            ['Checksum',  $backup->checksum],
        ]);

        if (! $this->option('force')
            && ! $this->confirm('<fg=red>This will OVERWRITE the current database.</> Continue?')
        ) {
            $this->info('Restore cancelled.');

            return self::SUCCESS;
        }

        // Verify integrity
        $this->info('Verifying backup integrity…');
        if (! $service->verify($backup)) {
            $this->error('Checksum verification FAILED. The backup file may be corrupted or tampered with.');

            return self::FAILURE;
        }
        $this->info('Integrity check passed ✓');

        // Update linked RestoreRequest if present
        $restoreRequest = $backup->restoreRequests()
            ->whereIn('status', ['pending', 'approved'])
            ->latest()
            ->first();

        $restoreRequest?->update(['status' => 'in_progress']);

        // Execute restore
        try {
            $service->restore($backup);
            $restoreRequest?->update(['status' => 'completed', 'completed_at' => now()]);
            $this->info("Database restored successfully from backup #{$backup->id}.");

            return self::SUCCESS;
        } catch (\Throwable $e) {
            $restoreRequest?->update(['status' => 'failed', 'note' => $e->getMessage()]);
            $this->error("Restore failed: {$e->getMessage()}");

            return self::FAILURE;
        }
    }
}
