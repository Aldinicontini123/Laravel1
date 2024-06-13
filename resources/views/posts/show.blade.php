<x-app-layout>
    <a href="{{route('posts.index')}}">Volver a posts</a>

    <h1> {{$post->title}}</h1>
    <p>
        <b>categoria:{{$post->category}}</b>
    </p>
    <p>
        <b>contenido:{{$post->content}}</b>
    </p>

    <a href="{{route('posts.edit', $post)}}">editar el post</a>
    <BR></BR>

    <form action="{{route('posts.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar post
        </button>
    </form>
</x-app-layout>