<?php

use App\Http\Controllers\LogisticsController;
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


Route::get('/getdata', [LogisticsController::class, 'listLoads',])->name('/getData');
Route::post('/putdata', [LogisticsController::class, 'addData',])->name('/putdata');


Route::get('/logistics/{id}/edit', [LogisticsController::class, 'edit',])->name('logistics.edit');
Route::put('/logistics/{id}', [LogisticsController::class, 'update'])->name('logistics.update');


Route::get('/register', [LogisticsController::class, 'registration'])->name('register');
Route::post('/register-user', [LogisticsController::class, 'registerUser'])->name('register-user');


Route::get('/logistics', [LogisticsController::class, 'index'])->name('logistics.index');
Route::delete('/logistics/{id}', [LogisticsController::class, 'destroy'])->name('logistics.destroy');

Route::get('/', [LogisticsController::class, "homePage",])->name('homePage');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login/user', [LogisticsController::class, 'loginUser'])->name('login.user');
Route::get('/admin/{id}', [LogisticsController::class, 'adminPage'])->name('admin');


//will set up by users id. i will fix it when its done
Route::get('back',function(){
    return redirect('/admin/1');
})->name('back');
