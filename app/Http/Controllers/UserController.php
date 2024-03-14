<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;
    //constructor with dependency injection
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * get data user by id
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */

    public function getUserById($id)
    {
        $result =  $this->userRepository->getUserById($id);

        return response()->json([
            "success" => true,
            "status" => 200,
            "data" => $result
        ]);
    }
}   

