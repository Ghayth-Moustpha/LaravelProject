<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TemplateController;

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


Route:: get ("/services", [ServicesController::class, 'index'] ) ; 
Route:: get ("/services/{id}", [ServicesController::class, 'show'] ) ; 



Route:: get ("/about"  , function () {
    
    return view ("about" ) ;
} ); 
Route:: get ("/Template"  , [TemplateController::class, 'index']); 

Route:: get("/user" , function () {
    return "This is Get User Page "  ;
}) ; 

Route:: get ("/test"  , function () {
    
    return "test" ;
} ); 

Route:: get ("/test2"  , function () {
    
    return "test" ;
} ); 




