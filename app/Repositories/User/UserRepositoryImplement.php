<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepositoryImplement implements UserRepository
{
    private $model;

    //constructor with dependency injection
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * get data user by id
     * @param $id
     * @return mixed
     */

    public function getUserById($id)
    {
        return $this->model->where('id', $id)->first();
    }
}
