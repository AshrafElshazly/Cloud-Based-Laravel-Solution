<?php

namespace App\Infrastructure\Eloquent\Repositories;


use App\Infrastructure\Eloquent\Models\Setting;
use App\Domain\Repositories\SettingRepositoryInterface;

class EloquentSettingRepository implements SettingRepositoryInterface
{
    public function getLatest()
    {
        return Setting::latest()->first();
    }
}
