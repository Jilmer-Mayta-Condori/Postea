<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // $posts = Post::all();
        // return view('index',compact('posts'));
        $publicaciones = Post::paginate(10);
        return view('posts.index', compact('publicaciones'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        // $resultado = Post::find($id);
        // return view('postUnico',['post'=> $resultado]);
        return view('posts.postUnico', ['post' => Post::find($id)]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required:max:2200',
        ]);

        $imageName = $request->file('image')->store('posts/' . Auth::id(),'public');
        $title = $request->get('title');
        $content = $request->get('content');

        $post = $request->user()->posts()->create([
            'title' =>  $title,
            'image'  =>  $imageName,
            'content' =>  $content,
        ]);

        return redirect()->route('post',['id' => $post->id]);
    }

    public function userPost()
    {
        $user_id = Auth::id();
        $publicaciones = Post::where('user_id', '=', $user_id)->paginate(10);
        return view('posts.index', compact('publicaciones'));
    }

    public function destroy($id)
    {
        $eliminar = Post::find($id);
        $eliminar->delete();
        return redirect('/posts/myPosts');
    }

    // public function today()
    // {
    //     $hoy = Carbon::today();
    //     $fecha = substr($hoy, 0, 10);
    //     $posts = Post::where('created_at','>', $hoy)->get();
    //     return view('today',compact('posts', 'fecha'));
    // }

    // public function create(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required:max:120',
    //         'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    //         'content' => 'required:max:2200',
    //     ]);

    //     $image = $request->file('image');
    //     $imageName = time().$image->getClientOriginalName();
    //     $title = $request->get('title');
    //     $content = $request->get('content');

    //     $post = new Post();
    //     $post->title = $title;
    //     $post->image = 'img/' . $imageName;
    //     $post->content = $content;
    //     $post->save();

    //     $request->image->move(public_path('img'), $imageName);

    //     return redirect()->route('post', ['id' => $post->id]);
    // }
}