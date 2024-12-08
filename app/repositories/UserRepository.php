<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository{
    protected $user;

    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function getModel(){
        return $this->user;
    }

    public function findUserByEmail($email){
        return User::where("email",$email)->first();
    }

}