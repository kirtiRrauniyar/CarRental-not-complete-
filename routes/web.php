<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::namespace('App\Http\Controllers\Front')->group(function(){

    Route::controller(\IndexController::class)->group(function () {
      Route::get('/','index');
      Route::get('about','about');
      Route::get('servies','servies');
      Route::get('car','car');
      Route::get('CarDetails','CarDetails');
      Route::get('contact','contact');
      Route::get('pricing','pricing');
    });
});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::group(['middleware'=>['admin']],function(){
        Route::get('dashboard','AdminController@dashboard');
        Route::get('logout','AdminController@logout');
    });
    Route::controller(\AdminController::class)->group(function(){

         Route::match(['get','post'],'login','login');
        //  registration
        Route::get('cab-regitration','RegistrationController@index');
        Route::get('Add-cab-regitration','RegistrationController@create');
        Route::post('Add-cab-regitration','RegistrationController@store');
        Route::get('Edit-cab-regitration/{id}','RegistrationController@create');
        Route::post('Edit-cab-regitration/{id}','RegistrationController@update');
        Route::get('Delete-cab-regitration','RegistrationController@edit');
   });

});
