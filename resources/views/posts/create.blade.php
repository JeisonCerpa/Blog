<x-app-layout>
    <h1>Formulario para crear un nuevo post</h1>
{{--     @if ($erros->any())
    <div>
        <h2>Errores: </h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
        @error('title')
            <p><strong>{{$message}}</strong></p>
        <br>
        <label for="title">Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug')}}">
        @error('slug')
            <p><strong>{{$message}}</strong></p>
        <br>
        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" value="{{old(çategory)}}">
        @error('category')
            <p><strong>{{$message}}</strong></p>
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content">{{old('content')}}</textarea>
        @error('content')
            <p><strong>{{$message}}</strong></p>
        <br>
        <button type="submit">Crear post</button>
    </form>
</x-app-layout>
