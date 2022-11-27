@extends('layout')

@section('title')
    postList
@endsection

@section('content')
    <h3>Post List</h3>
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