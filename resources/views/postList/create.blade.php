@extends('layout')

@section('title', 'postList')

@section('content')
    <div class="px-5">
        <h3>글쓰기</h3>
        <form action="/postlist" method="POST">
            @csrf
            <div class="row">
                <label for="postTitle">Title</label>
                <input type="text" id="postTitle" class="col d-block border border-1 rounded" name="postTitle">
            </div>
            <div class="row">
                <label for="postBody">Body</label>
                <textarea name="postBody" id="postBody" class="col d-block border border-1 rounded" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary">작성</button>
            </div>
        </form>
    </div>
@endsection