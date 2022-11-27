@extends('layout')

@section('title', 'postList')

@section('content')
    <div class="px-5">
        <h3>글쓰기</h3>
        <form action="/postlist" method="POST">
            @csrf
            <div class="row">
                <label for="postTitle">Title</label>
                <input type="text" id="postTitle" class="col d-block border border-1 rounded @error('title') border-danger @enderror" name="postTitle" required>
                @error('title')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="postBody">Body</label>
                <textarea name="postBody" id="postBody" class="col d-block border border-1 rounded @error('body') border-danger @enderror" cols="30" rows="10" required></textarea>
                @error('body')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary">작성</button>
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='/postlist'">취소</button>
            </div>
        </form>
        {{-- @if($errors->any())
            {{ $errors }}
        @endif --}}
    </div>
@endsection