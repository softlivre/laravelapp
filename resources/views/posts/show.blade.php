@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <br><br>
    <div>
        <p>{!! $post->body !!}</p>
    </div>

    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
            <br><br>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection

