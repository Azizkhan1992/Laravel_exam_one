<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowProfileController extends Controller // Bir vazifali controller, uni php artisan make::controller controllerNameController --invokable bilan yaratiladi
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id = null)
    {
        return 'Bir metodli controllerdan salom! ID '.$id;
    }
}
