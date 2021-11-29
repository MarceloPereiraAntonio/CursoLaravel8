<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
     
        return view ('admin.posts.index', compact('posts'));
    }

  public function create()
  {
      return view ('admin.posts.create');
  }

  public function store(StoreUpdateRequest $request)
  {
   $post = Post::create($request->all());
   return redirect()->route('posts.index');
  }

  public function show($id)
  {
    if(!$post = Post::find($id))
        {
            return redirect()->route('posts.index');
        }

     return view('admin.posts.show', compact('post'));
    
  }
}
