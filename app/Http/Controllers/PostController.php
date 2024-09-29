<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;

class PostController extends Controller
{
    // public function showhomepage()
    // {
    //     $posts = Post::all();
    //     return view('home', compact('posts'));
    // }

    // public function showcreatepage()
    // {
    //     return view('CreatePost');
    // }
    // public function createpost(Request $request)
    // {
    //     $request->validate([
    //         'post_title' => 'required',
    //         'post_body' => 'required',
    //         // 'post_image' => 'required|post_image',
    //     ]);

    //     // $imagePath = $request->pimage->store('posts'); // تخزين الصورة

    //     Post::create([
    //         'post_title' => $request->ptitle,
    //         'post_body' => $request->pbody,
    //         // 'post_image' => $imagePath,
    //     ]);
    //     return redirect('/post/home')->with('success', 'done');
    // }

    public function index()
    {
        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }

    public function create()
    {
        return view('CreatePost');
    }


    // public function store(Request $request)
    // {
    //     //للتاكد
    //     // dd($request->name);

    //     // $post = new Post();
    //     // $post->post_title = $request->ptitle;
    //     // $post->post_body = $request->pbody;
    //     // $imagePath = $request->pfile->store('posts');
    //     Post::create([
    //         'post_title' => $request->ptitle,
    //         'post_body' => $request->pbody,
    //         // 'post_image' => $imagePath,
    //     ]);
    //     // $post->save();
    //     return redirect(route('post.index'));
    // }

    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_body' => 'required',
        ]);
    
        // Save the post for the authenticated user
        Post::create([
            'user_id' => Auth::id(),  
            'post_title' => $validatedData['post_title'],
            'post_body' => $validatedData['post_body'],
        ]);
        
    
        return redirect()->route('profile.show', 1); 
    }
    
    


    public function showPostPage(string $id)
    {
        $post = Post::findOrFail($id);
        return view('postPage', compact('post'));
    }

    public function delete(string $id)
    {

        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('EditPost', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        request()->validate([
            'ptitle' => 'required',
            'pbody' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $post->post_title = $request->ptitle;
        $post->post_body = $request->pbody;
        $post->save();
        return redirect()->route('post.showPostPage', ['id' => $post->id]);
    }

    // public function update(Post $post, Request $request)
    // {
    //     if (!$post) {
    //         return redirect()->route('post.index')->with('error', 'Product not found.');
    //     }
    //     $data = $request->validate([
    //         'post_title' => 'required',
    //         'post_body' => 'required',
    //     ]);

    //     // قم بتحديث المنتج
    //     $post->update($data);

    //     // إعادة التوجيه بعد التحديث
    //     return redirect()->route('post.index')->with('success', 'Product updated successfully');
    // }
}
