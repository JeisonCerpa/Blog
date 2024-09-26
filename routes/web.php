<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

use function Laravel\Prompts\select;
use function Pest\Laravel\post;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('prueba', function(){
    $post = new Post;


/*  Crear nuevo registro       
    $post->title = 'Titulo de prueba 3';
    $post->content = 'Cuerpo de prueba 3';
    $post->category = 'Categoria de prueba 3';

    $post->save();
    return $post; */

/*  Encontrar registro
    $post = Post::find(1);*/

/* Actualzar registro 
   $post = Post::where('title','Titulo de prueba 1')->first();

    $post->category = 'Desarrolo Web';
    $post

    return $post; */

  /* Listar registros
    $post = Post::orderBy('category','asc')->select('id','title','category')->take(2)->get(); */

/*     Elinar registros
    $post =Post::find(1);
    $post->delete();

    return 'Registro eliminado'; */
});