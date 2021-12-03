<h1>Editando Post {{ $post->title }}</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                        
        @endforeach
    </ul>
    
@endif
    
<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="file" name="image" id="image">
    <input type="text"  name="title" id="title" placeholder="Título" value="{{ $post->title }}">
    <br><br>
    <textarea name="content" id="content" cols="30" rows="4" placeholder="escreva seu post...">{{ $post->content }}</textarea>
    <br>
    <button type="submit" >Salvar</button>
    <a  href="{{ route('posts.index' )}}" >Voltar</a>

</form>