<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostList;

class PostlistController extends Controller
{
    public function index()
    {
        return view('postList.index');
    }
    public function create()
    {
        return view('postList.create');
    }
    public function store(Request $request)
    {
        $request->input('postTitle');
        $request->input('postBody');

        $postlist = postlist::create([
            'title' => $request->input('postTitle'),
            'body' => $request->input('postBody'),
        ]);

        return redirect('/postlist');
    }
}
