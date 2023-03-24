<?php

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
    $pastes = \App\Table1::all();
    return view('welcome', ['pastas' => $pastes]); // this array is passed to view as $pastas not $pastes
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


route::get('/submit', function () {
    return view('submit');
});


// handling the form submission
use Illuminate\Http\Request;

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'max:50',
        'paste_data' => 'required'   // these fields should be same of the table1s field name/ database field name 
    ]);
    // to show in web == debug
    // dd($data);
    if($data['title'] == null) $data['title'] = "NULL";
    $table1 = tap(new App\Table1($data))->save();
 
    return redirect('/');
});




// show pasted data
// have to use a http controller
// https://laravel.com/docs/5.1/controllers for detail
// https://stackoverflow.com/questions/35737995/passing-data-from-blade-to-route for passing data to route
Route::get('/view_paste/{id}', 'pastedataController@view_paste');
// have to make a class pastedata which contains function view_paste