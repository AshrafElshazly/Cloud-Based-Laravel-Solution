<?php

namespace App\Application\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Infrastructure\Eloquent\Models\Admin;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin';

    // protected $adminService;

    // public function __construct(AdminService $adminService)
    // {
    //     parent::__construct();
    //     $this->adminService = $adminService;
    // }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');

        // $admin = $this->adminService->createAdmin([
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => $password,
        // ]);

        $admin = Admin::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info("Admin created with ID: {$admin->id}");
    }
}
