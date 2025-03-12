@extends('layouts.app')

@section('content')
<script type="application/javascript" src="../../ckeditor/ckeditor.js"></script>


    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>    
        <div class='form-group'>
            {{Form::label('body', 'Body')}}
{{-- below in the id seciton is where you would load in ckeditor if it worked --}}
            {{Form::textarea('body', '', ['id' => 'editor1','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>     
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection