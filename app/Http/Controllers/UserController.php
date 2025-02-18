<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register()
    {
        return view('register');
    }

    public function registerStore(UserRegisterRequest $request)
    {
        $data = $request->all();
        try {
            $data['password'] = bcrypt($data['password']);
            $done = $this->userService->registerStore($data);
            throw_if(!$done, "User Cannot be Created!");
            return back()->with('success', "User Registration Completed!");
        } catch (\Exception $exp) {
            return back()->with('danger', $exp->getMessage());
        }
    }
}
