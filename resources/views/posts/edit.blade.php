<x-app-layout>

    <a href="{{route('posts.index')}}">Volver a posts</a>
    <h1>formulario para editar el post</h1>

    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <form action="{{route('posts.update', $post)}}", method="POST">

        @csrf
        @method('PUT')
        
        <label >
            Titulo:
            <input type="text" name= "title" value="{{old('title',$post->title)}}">
        </label>
        <br> 
        <br>

        <label >
            slug:
            <input type="text" name= "slug" value="{{old('slug',$post->slug)}}">
        </label>
        <br> 
        <br>

        <label >
            categoria:
            <input type="text" name= "category" value="{{old('category',$post->category)}}">
        </label>
        <br>
        <br>
        <label>
            contenido:
            <textarea name="content">{{old('content',$post->content)}}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">
            Actualizar post
        </button>
    </form>
    
</x-app-layout>