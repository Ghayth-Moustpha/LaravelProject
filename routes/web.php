<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;

use App\Http\Middleware\RegularUserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Authenticate;


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
Route:: get ("/" , 
    function () {
    return view('home') ;
   
} ); 


// Route :: get ("Router" , Controller ) 


Route::group(['prefix' => 'services'], function () {
    Route::get('/', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/Admin', [ServicesController::class, 'adminindex'])->name('services.admin');

    Route::get('/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('/', [ServicesController::class, 'store'])->name('services.store');
    Route::get('/{id}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::delete('/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');
});Route:: get ("/services/{id}", [ServicesController::class, 'show'] ) ; 

Route:: get ("/Admin", [AdminController::class, 'index'] )  ; 



Route:: get ("/about"  , function () {
    
    return view ("about" ) ;
} ); 
Route:: get ("/Template"  , [TemplateController::class, 'index'])->middleware(Authenticate::class);
Route:: get ("/ourtemp"  , [TemplateController::class, 'adminindex'])->middleware(AdminMiddleware::class);
Route:: get ("/ourtemp/create"  , [TemplateController::class, 'create'])->middleware(AdminMiddleware::class);
Route::get('/templates/edite/{id}', [TemplateController::class, 'edite'])->name('templates.edite')->middleware(AdminMiddleware::class);

Route::put('/templates/update/{id}', [TemplateController::class, 'update'])->name('templates.update')->middleware(AdminMiddleware::class);
Route::post('/templates', [TemplateController::class, 'store'])->name('templates.store')->middleware(AdminMiddleware::class);
Route::delete('/template/{id}', [TemplateController::class, 'delete'])->name('template.delete');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/edite/{id}', [UsersController::class, 'edite'])->name('users.edit');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

