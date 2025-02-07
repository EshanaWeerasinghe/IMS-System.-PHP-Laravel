<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Academic;
use App\Posts;
use App\MyClass;
use File;
use Input;
use Storage;
use DB;

class PostsController extends Controller
{
    public function index()
    {
       $post = Posts::all();
       return view('posts.index',compact('post'));        
    }
    
    public function create()
    {
       return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string|max:225', 
            'body'=>'required',]);
        Posts::create($request->all());
        return redirect()->route('posts.index')->with('success','Post created success');
    }
    
    public function show($id)
    {
        $post = Posts::find($id);
        return view('posts.show', compact('post'));
    }

        public function edit($id)
    {
        $post = Posts::find($id);
        return view('posts.edit', compact(post));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'title' => 'required' ,
          'body' => 'required',
        ]);
        Posts::find($id)->update($request->all());
        return redirect()->route('posts.index')->with('success','Post updae success');
    }
    
    public function destroy($id)
    {
        Posts::find($id)->delete();
        return redirect()->route('posts.index')->with('success','Post deleted success');
    }
    

}