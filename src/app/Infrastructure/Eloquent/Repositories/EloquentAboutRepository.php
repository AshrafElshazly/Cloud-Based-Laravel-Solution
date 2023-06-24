<?php

namespace App\Infrastructure\Eloquent\Repositories;


use App\Infrastructure\Eloquent\Models\Service;
use App\Domain\Repositories\AboutRepositoryInterface;

class EloquentAboutRepository implements AboutRepositoryInterface
{
    public function getActive()
    {
        return Service::where('active', '=', 1)->get();
    }
}
