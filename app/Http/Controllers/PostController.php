<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('category')->latest()->paginate(20);
        return view('posts.index',compact('posts'));
    }

    public function destroy(Post $post, $id)
    {
        $post->delete($id);
        return redirect()->to('posts');
    }
}
