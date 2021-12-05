@extends('admin.layouts.app')

@section('title', "Editar o Post {$post->title}")

@section('content')

<h1 class="text-center text-3xl uppercase font-black my-4">Editando Post {{ $post->title }}</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                        
        @endforeach
    </ul>
    
@endif
<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="file" name="image" id="image">
    <input type="text"  name="title" id="title" placeholder="Título" value="{{ $post->title }}">
    <br><br>
    <textarea name="content" id="content" cols="30" rows="4" placeholder="escreva seu post...">{{ $post->content }}</textarea>
    <br>
    <button type="submit" class="w-full py-3 mt-6
    font-medium tracking-widest text-white uppercase 
    bg-black shadow-lg focus:outline-none hover:bg-gray-900 
    hover:shadow-none">Salvar</button>
    <a  href="{{ route('posts.index' )}}" >Voltar</a>

</form>
</div>
@endsection