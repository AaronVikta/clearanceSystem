<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('students', 'StudentController@index');
Route::put('updatesecuritystatus/{id}', 'SecurityController@updateStudent');
Route::put('updatealumnistatus/{id}', 'AlumniController@updateStudent');
Route::put('updatelibrarystatus/{id}', 'LibraryController@updateStudent');
Route::put('updatefacultystatus/{id}', 'FacultyController@updateStudent');
Route::put('updateauditstatus/{id}', 'AuditController@updateStudent');
Route::put('updatesaffairsstatus/{id}', 'SAffairsController@updateStudent');
Route::get('student/{id}','StudentController@show');
// Set an generated rrr to user
Route::post('/alumnirrr/{id}','RRRController@generateAlumniRRR');
Route::post('/convocrrr/{id}','RRRController@generateConvocationRRR');
Route::get('myrrr/{id}','RRRController@getMyAlumniRRR');
Route::get('crrr/{id}', 'RRRController@getMyConvocRRR');
Route::post('update/{id}', 'StudentController@updateProfile');
// Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
