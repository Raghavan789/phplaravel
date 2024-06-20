<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {

    return view('welcome');
    /*
    import this for using the below code
    use App\Http\Controllers\DashboardController;
    the below code says that when ever you get the request u jsut pass it to the index fucntion in the http controller some file name
    */
});
Route::get('/',[DashboardController::class , 'index' ]);

Route::get('/profile',[ProfileController::class, 'index']);

