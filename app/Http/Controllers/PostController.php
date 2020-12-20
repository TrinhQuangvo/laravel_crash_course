<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Repositories\PostRepository;

class PostController extends Controller
{

    private $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository; 
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = $this->postRepository->all(); 
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.newPost');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('posts')->with('success', 'Content Was Added Successfully');
    }

    public function destroy($id)
    {
        $this->postRepository->destroy($id);
        
        return redirect()->route('posts')->with('deleted','this post have been deleted');
    }
}
