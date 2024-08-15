<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/hello', function () {
    return view('hello', [
        "name" => "Eko"
    ]);
});

Route::get('/world', function () {
    return view('hello.world', [
        "name" => "Eko"
    ]);
});

Route::get('/html-encoding', function (\Illuminate\Http\Request $request){
    return view("html-encoding", ["name" => $request->input("name")]);
});

Route::get('/class', function (){
    return view("class", ["hobbies" => [
        [
            "name" => "Coding",
            "love" => true
        ],
        [
            "name" => "Gaming",
            "love" => false
        ]
    ]]); // Pass the $hobbies variable into the view
});

Route::get('/include', function () {
    return view('include');
});

Route::get('/include-condition', function () {
    return view('include-condition', [
        "user" => [
            "name" => "Eko",
            "owner" => false
        ]
    ]);
});

Route::get('/each', function () {
    return view("each", ["users" => [
        [
            "name" => "Eko",
            "hobbies" => ["Coding", "Gaming"]
        ],
        [
            "name" => "Kurniawan",
            "hobbies" => ["Coding", "Gaming"]
        ]
    ]]);
});

Route::get('/form', function () {
    return view('form', ["user" => [
        "premium" => true,
        "name" => "Eko",
        "admin" => true
    ]]);
});

Route::get('/csrf', function () {
    return view('csrf', []);
});

Route::get('/child', function () {
    return view('child', []);
});

