<x-app-layout>

    <a href="{{route('home')}}">
        Volver a home
    </a>
    
    <h1>Aqui se mostraran todos los posts</h1>

    <a href="{{route('posts.create')}}">
        nuevo post
    </a>
    
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post)}}">
                    {{$post->title}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$posts->links()}}

</x-app-layout>
