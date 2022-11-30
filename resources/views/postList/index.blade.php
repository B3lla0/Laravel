@extends('layouts.app')

@section('title')
    postList
@endsection

@section('content')
    <div class="d-flex justify-content-between mb-2">
        <h3>Post List</h3>
        <button type="button" class="btn btn-outline-primary" onclick="location.href='/postlist/create'">Create</button>
    </div>
    <ul>
        {{-- {{ $postlist }} --}}
        @foreach($postlist as $post)
            <li class="mb-2 border-bottom">
                <a href="/postlist/{{ $post->id }}">
                    Title : {{ $post->title }} <small class="float-end">Created_at {{ $post->created_at }}</small>
                </a>
            </li>
        @endforeach
    </ul>
@endsection