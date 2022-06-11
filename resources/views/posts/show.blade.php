@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <br><br>
    <div>
        <p>{{$post->body}}</p>
    </div>

    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection

