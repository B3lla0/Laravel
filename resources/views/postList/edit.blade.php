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
                <input type="text" id="postTitle" class="col d-block border border-1 rounded @error('title') border-danger @enderror" name="postTitle" value="{{ $post->title }}" required>
                @error('title')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>
            <div class="row">
                <label for="postBody">Body</label>
                <textarea name="postBody" id="postBody" class="col d-block border border-1 rounded @error('title') border-danger @enderror" cols="30" rows="10" required>{{ $post->body }}</textarea>
                @error('body')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary">작성</button>
            </div>
        </form>
    </div>
@endsection