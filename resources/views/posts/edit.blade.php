<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>
    @if ($erros->any())
    <div>
        <h2>Errores: </h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{old('title',$post->title)}}">
        <br>
        <label for="title">Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug',$post->slug)}}">
        <br>
        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" value="{{old('category',$post->category)}}">
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content">{{old('content',$post->content)}}</textarea>
        <br>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>
