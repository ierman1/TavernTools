<?php

namespace App\Users\Repositories;

use App\Users\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserRepository
{
    /**
     * Get all users.
     *
     * @return Collection
     */
    public function getAllUsers(): Collection
    {
        return User::all();
    }

    /**
     * Find a user by ID.
     *
     * @param  int  $id
     * @return User|null
     */
    public function findUserById($id): Model|null
    {
        return User::find($id);
    }

    /**
     * Create a new user.
     *
     * @param  array  $data
     * @return User
     */
    public function createUser(array $data): Model
    {
        return User::create($data);
    }
}