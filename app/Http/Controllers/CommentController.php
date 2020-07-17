<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use App\Notifications\NewComment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required:max:250',
        ]);

        $comment = new Comment();
        $comment->user_id = $request->user()->id;
        $comment->content = $request->get('content');

        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);
        
        $id = Auth::id();
        $user = User::find($id);

        $post->user()->get()[0]->notify(new NewComment($post, $user));


        return redirect()->route('post',['id' => $request->get('post_id')]);
    }
}
