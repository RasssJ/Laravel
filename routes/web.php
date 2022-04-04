<?php

use App\Models\Post;
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
    return view('posts', [
        "posts"=>Post::all()
    ]);
});
Route::get('/posts/{post}', function ($slug) {
    return view('post', [
        "post"=>Post::find($slug)
    ]);
})->where("post","[A-z_\-]+");

Route::get('/hello', function ()
{
    return "Hello World";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
