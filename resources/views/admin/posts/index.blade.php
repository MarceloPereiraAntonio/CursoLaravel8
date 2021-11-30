<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Cadastrar novo Post</a>
<hr>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
    
@endif

@foreach ($posts as $post)
    <p>
        {{$post->title}} 

        [ <a href="{{route('posts.show', $post->id) }}">Ver detalhes]</a>
        [<a href="{{route('posts.edit', $post->id) }}">Editar]</a>
    </p>
   

    
@endforeach