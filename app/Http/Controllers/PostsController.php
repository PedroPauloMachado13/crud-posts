<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //FUNÇÕES DE EXIBIÇÃO
    public function show(){

        $post = Post::latest()->paginate(12)->all();

        return view('posts.posts', compact('post'));
    }

    public function search(){

        return view('posts.search');
    }

    public function doSearch(Request $request){

        $request->validate([
            'title' => ['required','min:5'],
        ]);

        $title = $request->title;
        $post = Post::where('title','=',$title)->get();
        //dd($post);

        return view('posts.posts', compact('post'));
    }

    //FUNÇÕES DE CRIAÇÃO
    public function create(){

        return view('posts.create');
    }

    public function store(Request $request){

        //Fazer a parte de attach() / detach() ->tags()

        $request->validate([
            'title' => ['required', 'min:5'],
            'body' => ['required', 'min:5', 'max:255'],
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = '1';

        $post->save();

        /*

        Post::create($request->validate([
            'title' => ['required', 'min:5'],
            'body' => ['required', 'min:5', 'max:255'],
        ]));

        */

        return redirect('/posts')
            ->with('message', 'Post criado!');;
    }

    //FUNÇÕES DE EDIÇÃO
    public function edit($id){

        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request){

        $postId = $request->id;
        $post = Post::find($postId);
        $post->title = $request->title;
        $post->body = $request->body;


        $post->save();

        return redirect('/posts')
            ->with('message', 'Post atualizado!');
    }

    //FUNÇÃO DE DELEÇÃO
    public function delete(Post $post){

        $id = $post->id;
        Post::destroy($id);

        return redirect('/posts')
            ->with('message', 'Post deletado!');;
    }
}
