@extends('layout')

@section('title', 'postList')

@section('content')
    <div class="px-5">
        <div>
            <h3>게시글</h3>
            {{-- {{ $post }} --}}
            Title : {{ $post->title }}<small class="float-end">{{ $post->created_at }}</small> <br />
            Body
            <p>{{ $post->body }}</p>
        </div>
    </div>
@endsection