@extends('layout')

@section('title', 'Edit post')

@section('content')
    <div class="px-5">
        <h3>글수정</h3>
        <form action="/postlist/{{ $post->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <label for="postTitle">Title</label>
                <input type="text" id="postTitle" class="col d-block border border-1 rounded" name="postTitle" value="{{ $post->title }}">
            </div>
            <div class="row">
                <label for="postBody">Body</label>
                <textarea name="postBody" id="postBody" class="col d-block border border-1 rounded" cols="30" rows="10">{{ $post->body }}</textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary">작성</button>
            </div>
        </form>
    </div>
@endsection