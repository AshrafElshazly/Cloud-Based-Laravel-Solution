<?php

namespace App\Domain\Repositories;

use Illuminate\Database\Eloquent\Model;

interface UserRepositoryInterface
{
    public function all();
    public function find($id): ?Model;
    public function create(array $data): ?Model;
    public function update(array $data): ?Model;
    public function delete($id): bool;
}
