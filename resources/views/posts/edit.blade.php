@extends('layouts.app')
@section('content')
  <h1>Edit Post</h1>
  {{ Form::open(array('action' => ['PostsController@update', $post->id], 'method' => 'Post', 'enctype' => 'multipart/form-data')) }}
  <div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', $post->title, array('class' => 'form-control', 'placeholder' => 'Title')) }}
  </div>
  <div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::text('body', $post->body, array('class' => 'form-control', 'placeholder' => 'Body')) }}
  </div>
  <div class="form-group">
    {{ Form::file('cover_image')}}
  </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
  {{ Form::close() }}
@endsection