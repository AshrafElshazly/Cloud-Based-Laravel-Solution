<?php

namespace App\Application\Http\Controllers\Web;

use App\Application\Http\Controllers\Controller;
use App\Domain\Services\SettingService;
use App\Domain\Services\UserService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $userService;
    private $settingService;

    public function __construct(UserService $userService, SettingService $settingService)
    {
        $this->userService = $userService;
        $this->settingService = $settingService;
    }
    public function index()
    {
        return $this->settingService->getLatestSetting();
    }
}
