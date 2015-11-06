@extends('layout/template')

@section('content')
    <h1>Edit Book</h1>
    {!! Form::open(['method'=>'PUT','route'=>['books.update',$book->id]]) !!}
    <div class="form-group">
        {!! Form::label('ISBN','ISBN:') !!}
        {!! Form::text('isbn',$book->isbn,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Title','Title:') !!}
        {!! Form::text('title',$book->title,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Author','Author:') !!}
        {!! Form::text('author',$book->author,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Publisher','Publisher:') !!}
        {!! Form::text('publisher',$book->publisher,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Image','Image:') !!}
        {!! Form::text('image',$book->image,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update',['class'=>'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@endsection