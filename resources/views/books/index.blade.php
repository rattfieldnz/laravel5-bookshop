@extends('layout/template')

@section('content')
    <h1>Laravel 5 Bookstore</h1>
    <a href="{{url('books/create')}}" class="btn btn-success">Create Book</a>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>Id</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Thumbs</th>
            <th colspan="3">Actions</th>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->publisher}}</td>
                    <td><img src="/img/{{$book->image}}.jpg" alt="" height="45px" width="35px"></td>
                    <td><a href="{{url('books',$book->id)}}" class="btn btn-primary">Read</a></td>
                    <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'route'=>['books.destroy',$book->id]]) !!}
                        {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection