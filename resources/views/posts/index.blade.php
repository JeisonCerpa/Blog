<x-app-layout>
    <h1>Aqui se mostrarán todos los posts</h1>
    <a href="{{route('posts.create')}}">Crear un nuevo post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show',$post->id)}}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
</x-app-layout>
