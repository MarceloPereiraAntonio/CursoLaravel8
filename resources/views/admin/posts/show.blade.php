<h1>Detalhes do post {{ $post->title }}</h1>

<ul>
    <li><strong>Título: </strong>{{ $post->title }}</li>
    <li><strong>Conteúdo: </strong>{{ $post->content }}</li>
</ul>

<form action="{{ route('posts.destroy') }}" method="post">

    <button type="submit">Deletar post: {{ $post->title }}</button>
</form>

<a  href="{{ route('posts.index' )}}" >Voltar</a>