<?php

namespace App\Http\Controllers;

use App\services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function showRegisterForm(){
        return view('auth.register');
    }

    public function registerUser(Request $request){
        $password = $request->password;
        $confirm_password = $request->confirm_password;
        if(trim($password) === trim($confirm_password)){
            $data = [
                "name" => trim($request->name),
                "email" => trim($request->email),
                "password" =>trim($password),
                "role" => 1,
            ];
            $this->userService->registerUser($data);
            return redirect()->route('home');
        }
        dd("erro"); //TODO: retornar erro
    }

    public function showLoginForm(){
        return view("auth.login");
    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $email = $request->email;
        $password = $request->password;
        $user = $this->userService->findUser($email);

        if($user){
            if(Hash::check($password, $user->password)){
                Auth::login($user);
                return redirect("/");
            }
            dd("senha incorreta");  //TODO retornar erro
        }
        dd("usuário não encontrado"); //TODO retornar erro
    }
}
