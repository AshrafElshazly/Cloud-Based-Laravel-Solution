<?php

namespace App\Application\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Infrastructure\Eloquent\Models\User;

class CreateUserCommand extends Command
{
    protected $signature = 'user:create {name} {email} {password}';
    protected $description = 'Create a new user';

    // protected $userService;

    // public function __construct(UserService $userService)
    // {
    //     parent::__construct();
    //     $this->userService = $userService;
    // }

    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');

        // $user = $this->userService->createUser([
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => $password,
        // ]);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info("User created with ID: {$user->id}");
    }
}
