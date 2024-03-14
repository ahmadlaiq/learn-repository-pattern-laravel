<?php

namespace App\Repositories\User;

interface UserRepository
{
    /**
     * get data user by id
     * @param $id
     * @return mixed
    */
    public function getUserById($id);
}
