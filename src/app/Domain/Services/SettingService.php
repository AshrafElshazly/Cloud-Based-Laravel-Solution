<?php

namespace App\Domain\Services;

use App\Domain\Repositories\SettingRepositoryInterface;

class SettingService
{
    protected $settingRepository;

    public function __construct(SettingRepositoryInterface $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function getLatestSetting()
    {
        return $this->settingRepository->getLatest();
    }
}
