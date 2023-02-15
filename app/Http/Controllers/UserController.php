<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller // controllerlar view dan so'rov qabul qilib, qayta ishlaydi, modeldan ma'lumot olib qayta ishlaydi va yana view ga qaytarib beradi
{
    public function index(Request $request)
    {
        $name = "Aziz";
        $users = User::query()->get();

        $user = User::query()->find(11);

        // dd($user?->name);

        // return view('users', [
        //     'name' => $name,
        //     'users' => $users
        // ]);

        return view('home.index');

        return new JsonResponse([
            'name' => $name,
            'users' => $users
        ]);
    }

    public function hello(Request $request) {
        return "Salom";
    }
}
