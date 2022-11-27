@extends('layout')

@section('content')
<h3>Project List</h3>
    @foreach($projects as $project)
    Title: {{ $project->title }}<br/>
    Description: {{ $project->description }}<br />
    @endforeach
@endsection
