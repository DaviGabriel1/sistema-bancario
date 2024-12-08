<?php
namespace App\services;

use App\Repositories\UserRepository;

class UserService{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerUser($data){
        $this->userRepository->create($data);
    }
}