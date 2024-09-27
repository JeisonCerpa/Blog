<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

use function Laravel\Prompts\select;
use function Pest\Laravel\post;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::Resource('posts', PostController::class);


Route::get('prueba', function(){

    $post = new Post;

/*  Encontrar registro */
    $post = Post::find(1);
    dd($post->is_active);

});