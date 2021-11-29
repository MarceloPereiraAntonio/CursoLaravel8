<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Cadastrar novo Post</a>
<hr>

@foreach ($posts as $post)
    <p>{{$post->title}} [ <a href="{{route('posts.show', $post->id) }}">ver detalhes]</a></p>
 

    
@endforeach