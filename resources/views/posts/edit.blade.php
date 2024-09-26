<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        <br>
        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" value="{{$post->category}}">
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content">{{$post->content}}</textarea>
        <br>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>
