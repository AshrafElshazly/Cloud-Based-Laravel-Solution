<?php

namespace App\Application\Http\Controllers\Api;

use App\Domain\Services\UserService;


use App\Application\Http\Controllers\Controller;
use App\Application\Http\Resources\UserResource;
use App\Application\Http\Traits\ApiResponseTrait;

class UserController extends Controller
{
    use ApiResponseTrait;
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return $this->apiResponse(200, 'All Users Data loding success', null, UserResource::collection($users));
    }
}
