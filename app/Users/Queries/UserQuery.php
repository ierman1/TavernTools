<?php

namespace App\Users\Queries;

use App\Users\Services\UserService;
use Illuminate\Database\Eloquent\Collection;

class UserQuery
{
    public function __construct(
        protected UserService $userService
    ) {}

    public function getAllUsers($_, array $args): Collection
    {
        return $this->userService->getAllUsers();
    }
}