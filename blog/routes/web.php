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
    return view('welcome');
});

Route::get('/index', function () {
    $posts = [
        ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'],
        ['id' => 2, 'title' => 'Js', 'posted_by' => 'mohamed', 'created_at' => '2021-03-25'],
        ['id' => 3, 'title' => 'Java', 'posted_by' => 'mahmoud', 'created_at' => '2021-03-30']
    ]; 
    return view('index', ['allPosts' => $posts]);
});
