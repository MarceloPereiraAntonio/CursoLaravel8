<h1>Cadastrando novo Post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                        
        @endforeach
    </ul>
    
@endif
    
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text"  name="title" id="title" placeholder="Título">
    <br><br>
    <textarea name="content" id="content" cols="30" rows="4" placeholder="escreva seu post..."></textarea>
    <br>
    <button type="submit" >cadastrar</button>

</form>