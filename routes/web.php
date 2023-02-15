<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); //Route orqali qaysi sahifa ko'rishi kerakligini ko'rsatadi
});

Route::get('/products', [ProductController::class, 'list']);

Route::get('product/{name?}', [ProductController::class, 'show']); //Route orqali sahiha(view) va controllerni bog'laydi, view dan controllerga ma'lumot berib yuboradi va qaytarib oladi

Route::get('/anyRoute/{name?}', function ($name=null) {
    return 'Any Route '.$name; //Route orqali qaysi sahifa ko'rishi kerakligini ko'rsatadi
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/members', [HomeController::class, 'members']); 

Route::get('/about', [HomeController::class, 'about']);

// Route::get('/companies', [CompaniesController::class, 'index']);
Route::resource('companies', CompaniesController::class); //resurs ya'ni manbaga ulangan Controllerga Route ko'rsatish, bunda barcha route larni ko'rish mumkin. Route larni ko'rish uchun php artisan route:list komandasidan foydalaniladi

Route::get('/hello', function() {
    return view('hello'); //Route orqali qaysi sahifa ko'rishi kerakligini ko'rsatadi
});

Route::get('/search', function(Request $request) {
    $name = $request->get('name', 'kimdir');
    $age = $request->get('age', 23);
    return $name.' ismli foydalanuvchi '.$age.' yoshda'; //Route orqali qaysi sahifa ko'rishi kerakligini ko'rsatadi
});

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/users', function() {
        return 'Users Dashboard';
    });

    Route::get('/statistic', function() {
        return 'Statistic Dashboard';   //Route orqali qaysi sahifa ko'rishi kerakligini ko'rsatadi 
    });
});

Route::get('/show/{id?}', ShowProfileController::class); //Bir metodli controller bilan ishlash

// Route::get('/hello', [UserController::class, 'hello']);


Route::get('/users', [UserController::class, 'index']);  //Route orqali sahiha(view) va controllerni bog'laydi, view dan controllerga ma'lumot berib yuboradi va qaytarib oladi