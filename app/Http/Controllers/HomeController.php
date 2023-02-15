<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('app');
    }

    public function members(){

        $members = [
            'Eshmatov Toshmat',
            'John Doe',
            'Toshmatov Eshmat'
        ];  // Ba'zadan olingan ma'lumot
        return view('members', compact('members')); // Bazadan olingan ma'lumotni view ga berib yuborish
    }

    public function about () {
        return view('about');
    }
}
