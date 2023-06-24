<?php

namespace App\Infrastructure\Eloquent\Repositories;


use Illuminate\Database\Eloquent\Model;
use App\Infrastructure\Eloquent\Models\User;
use App\Domain\Repositories\UserRepositoryInterface;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function find($id): ?Model
    {
        $eloquentUser = User::find($id);
        return $eloquentUser ?  $eloquentUser : null;
    }

    public function create(array $data): ?Model
    {
        return User::Create($data);
    }

    public function update(array $data): ?Model
    {
        $eloquentUser = User::find($data['id']);
        return $eloquentUser ?  $eloquentUser : null;
    }

    public function delete($id): bool
    {
        return True;
    }
}
