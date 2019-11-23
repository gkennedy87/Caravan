@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create a New Post</h1>
        {!!Form::open(['action'=>'PostController@store','method'=>'POST'])!!}
            {{Form::label('title','Title', ['class'=>'control-label'])}}
            {{Form::text('title',null,['class'=>'form-control form-control-lg', 'placeholder'=>'Title']) }}
            {{Form::label('body','Body', ['class'=>'control-label mt-3'])}}
            {{Form::textArea('body',null,['class'=>'form-control form-control', 'id'=>'article-ckeditor', 'placeholder'=>'Body']) }}

            <div class="row justify-content-center mt-3">
                <div class="col-sm-6">
                    <button class="btn btn-block btn-primary" type="submit">Publish</button>
                </div>
            </div>
        {!! Form::close() !!}

    </div>
    

@endsection