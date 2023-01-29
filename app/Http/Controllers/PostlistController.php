<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostList;

class PostlistController extends Controller
{
    public function index()
    {
        // $postslist = postlist::all();
        $postslist = postlist::latest()->where('user_id', auth()-> id())->get();

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
        
        $values = request(['title', 'body']);
        $values['user_id'] = auth()->id();

        // $postlist = postlist::create($values);
        $postlist = postlist::create([
            'title' => $request->input('postTitle'),
            'body' => $request->input('postBody'),
            'user_id' => implode(" ", $values),
        ]);

        return redirect('/postlist/'.$postlist->id);
    }
    public function show(postlist $post)
    {
        // if(auth()->id() != $post->user_id){
        //     abort(403);
        // }
        // abort_if(auth()->id() != $post->user_id, 403);
        // abort_if(!auth()->user()->owns($post), 403);
        abort_unless(auth()->user()->owns($post), 403);
        // User::find(1);
        return view('postlist.show', [
            'post' => $post
        ]);
    }
    public function edit(postlist $post)
    {
        abort_unless(auth()->user()->owns($post), 403);

        return view('postlist.edit', [
            'post' => $post
        ]);
    }
    public function update(postlist $post)
    {
        abort_unless(auth()->user()->owns($post), 403);

        // request('title');
        request()->validate([
        'postTitle' => 'bail|required',
        'postBody' => 'required|min:5',
        ]);
        $post->update([
            'title' => request('postTitle'),
            'body' => request('postBody')
        ]);
        return redirect('/postlist/'.$post->id);
    }
    public function destroy(postlist $post)
    {
        abort_unless(auth()->user()->owns($post), 403);
        
        $post->delete();

        return redirect('/postlist');
    }
}
