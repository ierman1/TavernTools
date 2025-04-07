<?php

namespace App\Users\Services;

use App\Users\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    /**
     * The user repository instance.
     *
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @param UserRepository  $userRepository
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Get all users.
     *
     * @return Collection
     */
    public function getAllUsers(): Collection
    {
        // Logica de negocio
        return $this->userRepository->getAllUsers();
    }
}