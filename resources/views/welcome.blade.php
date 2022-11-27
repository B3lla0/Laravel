@extends('layout')

@section('title')
    welcome
@endsection

@section('content')
    <div>content123</div>
    {{-- <?php var_dump($books) ?> --}}
    <ul>
    @foreach ($books as $book)
        <li>{{ $book }}</li>
    @endforeach
    </ul>

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
@endsection