<?php

namespace App\Application\Console\Commands;

use Illuminate\Console\Command;

class ImportDatabaseBackup extends Command
{

    protected $signature = 'db:import {file}';
    protected $description = 'Restore a database backup';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dbHost = config('database.connections.mysql.host');
        $dbUsername = config('database.connections.mysql.username');
        $dbPassword = config('database.connections.mysql.password');
        $dbName = config('database.connections.mysql.database');
        $backupFile = $this->argument('file');

        $command = sprintf(
            'mysql --host=%s --user=%s --password=%s %s < %s',
            escapeshellarg($dbHost),
            escapeshellarg($dbUsername),
            escapeshellarg($dbPassword),
            escapeshellarg($dbName),
            escapeshellarg($backupFile)
        );

        exec($command);

        $this->info('Database restored from: ' . $backupFile);
    }
}
