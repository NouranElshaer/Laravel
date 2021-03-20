<?php

use App\Http\Controllers\PostController;
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

Route::get('posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Route::resource('posts', PostController::class );

// Route::get('/index', function () {
//     $posts = [
//         ['id' => 1, 'title' => 'Laravel', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'],
//         ['id' => 2, 'title' => 'Js', 'posted_by' => 'mohamed', 'created_at' => '2021-03-25'],
//         ['id' => 3, 'title' => 'Java', 'posted_by' => 'mahmoud', 'created_at' => '2021-03-30']
//     ]; 
//     return view('index', ['posts' => $posts]);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
