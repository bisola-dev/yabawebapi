<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});


Route::group(['namespace' => 'App\Http\Controllers'],function(){
  
    Route::get('/stat', [App\Http\Controllers\yababController::class, 'stat'])->name('stattest');

    Route::get('/basikinfo', [App\Http\Controllers\yababController::class, 'basikinfo']);
    Route::get('/scrollingtext', [App\Http\Controllers\yababController::class, 'scrollingtext']);

   
    Route::get('/quicklink', [App\Http\Controllers\yababController::class, 'quicklink']);
    Route::get('/createpay', [App\Http\Controllers\yababController::class, 'createpay']);
    Route::get('/manage', [App\Http\Controllers\yababController::class, 'manage']);
    Route::get('/newadmin', [App\Http\Controllers\yababController::class, 'newadmin']);

    Route::get('/acad', [App\Http\Controllers\schservController::class,'acad']);
    Route::get('/reg', [App\Http\Controllers\schservController::class,'reg']);
    Route::get('/bur', [App\Http\Controllers\schservController::class,'bur']);
    
    Route::get('/managesch', [App\Http\Controllers\schservController::class, 'managesch']);
    Route::get('/addedstaff/{id}/{skolid}', [App\Http\Controllers\schservController::class,'addedstaff']);
    Route::get('/newprog/{id}/{skolid}', [App\Http\Controllers\schservController::class,'newprog']);
    Route::get('/serv', [App\Http\Controllers\schservController::class,'serv']);
    Route::get('/addviewprog/{id}/{skolid}/{deptid}', [App\Http\Controllers\schservController::class,'addviewprog']);
    Route::get('/servprofile/{id}', [App\Http\Controllers\schservController::class,'servprofile']);

    Route::get('/viewservstaff/{id}', [App\Http\Controllers\schservController::class,'viewservstaff']);
    Route::get('/acadprofile/{id}', [App\Http\Controllers\schservController::class,'acadprofile']);
    Route::get('/viewacadstaff/{id}', [App\Http\Controllers\schservController::class,'viewacadstaff']);


    Route::get('/regdet/{id}', [App\Http\Controllers\schservController::class,'regdet']);
    Route::get('/regprofile/{id}', [App\Http\Controllers\schservController::class,'regprofile']);
    Route::get('/viewregstaff/{id}', [App\Http\Controllers\schservController::class,'viewregstaff']);
    Route::get('/burdet/{id}', [App\Http\Controllers\schservController::class,'burdet']);


   Route::get('/viewburstaff/{id}', [App\Http\Controllers\schservController::class,'viewburstaff']);
   Route::get('/lib', [App\Http\Controllers\schservController::class,'lib']);
   Route::get('/libdet/{id}', [App\Http\Controllers\schservController::class,'libdet']);
   Route::get('/viewlibstaff/{id}', [App\Http\Controllers\schservController::class,'viewlibstaff']);
   Route::get('/staffpro', [App\Http\Controllers\schservController::class,'staffpro']);


   Route::get('/know', [App\Http\Controllers\schservController::class,'know']);
   Route::get('/knowdet/{id}', [App\Http\Controllers\schservController::class,'knowdet']);


Route::get('/newsdet/{id}',[App\Http\Controllers\schservController::class,'newsdet']);
Route::get('/viewnews', [App\Http\Controllers\schservController::class,'viewnews']);


Route::get('/addevent', [App\Http\Controllers\schservController::class,'addevent']);
Route::get('/eventdet/{id}',[App\Http\Controllers\schservController::class,'eventdet']);
Route::get('/addalum', [App\Http\Controllers\schservController::class,'addalum']);

Route::get('/alumdet/{id}',[App\Http\Controllers\schservController::class,'alumdet']);
Route::get('/viewalum', [App\Http\Controllers\schservController::class,'viewalum']);














  
 
});
