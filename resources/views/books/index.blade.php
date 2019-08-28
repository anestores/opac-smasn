@extends('layouts.app')

@section('content')
    <p></p>

    <div class="row">
        <div class="col-md-4">
            <h1>Book Titles</h1>
        </div>
        <div class="col-md-6">
            {!! Form::open(['method'=>'GET', 'action'=>'BooksController@search']) !!}

            <div class="input-group">
                {!! Form::text('search', null, ['class'=>'form-control']) !!}

                {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}

            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-2 text-right">
            <a href="{{ action('BooksController@create') }}" class="btn btn-primary">Add</a>
        </div>
    </div>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Title</th>
            <th scope="col">Author</th>
            <th scope="col">Accession Number</th>
            <th scope="col">Subject</th>
            <th scope="col">Copyright</th>
            <th scope="col">Shelf Location</th>
        </tr>
        </thead>
        <tbody>
        @if($books)

            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td><a href="{{route('books.edit', $book->id)}}"> {{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->accession_number}}</td>
                    <td>{{$book->subject['name']}}</td>
                    <td>{{$book->copyright}}</td>
                    <td>{{$book->shelflocation}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

            {{ $books->render() }}

        </div>
    </div>



@stop