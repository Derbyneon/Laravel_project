
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [IndexController::class, 'index']);

/* 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/page1', function () {
    return view('page1',[
        'nom' => 'Jarvis',
        'prenom' => 'Test',
        'sujets' => ['maths', 'physique', 'tti']
    ]);
});
Route::get('/page1/{nom}/{prenom}', function (Request $request) {
    return view('page1',[
        'nom' => $request -> nom,
        'prenom' => $request -> prenom,
        'sujets' => ['maths', 'physique', 'tti']
    ]);
});
*/