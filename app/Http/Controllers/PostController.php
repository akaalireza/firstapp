<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index(){
      $data = User::all();
        return view('pagePosts.index', compact('data'));
    }
    public function show($id){
        $data = Post::find($id);
        return view('pagePosts.show',compact('data'));
    }
    public function update(Request $request ,$id){

        $this->validate($request,[
            'text' => 'Required|Min:3|Max:50',
            'title' => 'Required'
            ]);
        $data = Post::find($id);
        $data->delete();
        Post::create($request->all());
        return redirect('/')->with('Message','The Post successfully updated');
    }
    public function destroy($id){
        $data = Post::find($id);
        $data->delete();
        return redirect('/');
    }
    public function create()
    {
        return view('pagePosts.create');
    }
    public function store(Requests\PostRequest $request)
    {
        Post::create($request->all());
        return redirect('/')->with('Message','The Post successfully created');
    }
    public function edit($id)
    {
        $data = Post::find($id);
        return view('pagePosts.edit',compact('data'));
    }
    public function search(Request $request)
    {
        $input = $request->all();
        $title = $input['searchData'];
        $data = Post::where('title' , "$title")->get();
        return view('pagePosts.search',compact('data'));
    }
}
