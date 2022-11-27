@extends('layout')

@section('title', 'postList')

@section('content')
    <div class="px-5">
        <div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <h3 class="m-0">게시글</h3>
                <button class="btn btn-outline-secondary" onclick="location.href='/postlist/{{ $post->id }}/edit'">Edit</button>
            </div>
            {{-- {{ $post }} --}}
            Title : {{ $post->title }}<small class="float-end">{{ $post->created_at }}</small><br />
            <small class="float-end">{{ $post->updated_at }}</small>
            Body
            <p>{{ $post->body }}</p>
        </div>
    </div>
@endsection