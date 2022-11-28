<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostList;

class PostlistController extends Controller
{
    public function index()
    {
        // $postslist = postlist::all();
        $postslist = postlist::latest()->get();

        return view('postList.index', [
            'postlist' => $postslist
        ]);
    }
    public function create()
    {
        return view('postList.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'postTitle' => 'bail|required',
            'postBody' => 'required|min:5',
        ]);
        $postlist = postlist::create([
            'title' => $request->input('postTitle'),
            'body' => $request->input('postBody'),
        ]);

        return redirect('/postlist');
    }
    public function show(postlist $post)
    {
        return view('postlist.show', [
            'post' => $post
        ]);
    }
    public function edit(postlist $post)
    {
        return view('postlist.edit', [
            'post' => $post
        ]);
    }
    public function update(postlist $post)
    {
        // request('title');
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $post->update([
            'title' => request('postTitle'),
            'body' => request('postBody')
        ]);
        return redirect('/postlist/'.$post->id);
    }
    public function destroy(postlist $post)
    {
        $post->delete();

        return redirect('/postlist');
    }
}
