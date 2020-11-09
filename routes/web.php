<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;

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

//Rotas Principais
Route::get('/posts', [PostsController::class, 'show'])->name('posts.list');
Route::get('/', function(){
    return redirect('/posts');
} );

//Rota de Tags
Route::get('/posts/tag', [PostsController::class, 'getPostsForTag'])->name('posts.tags');

//Rota de busca por post especifico
Route::get('/posts/search', [PostsController::class, 'search'])->name('posts.search');
Route::post('/posts/search', [PostsController::class, 'doSearch'])->name('posts.get');

//Rota de criação e armazenamento de posts
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');

//Rota de edição e atualizção de posts
Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
Route::post('/posts/update', [PostsController::class, 'update'])->name('posts.update');

//Rota de Deleção
Route::post('/posts/{post}/delete', [PostsController::class, 'delete'])->name('posts.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
