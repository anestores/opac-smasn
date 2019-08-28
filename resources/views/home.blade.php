@extends('layouts.app')

@section('content')
    <p></p>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 align="center">Search for Book Title</h1>

                <p></p>

                {!! Form::open(['method'=>'GET', 'action'=>'HomeController@search']) !!}

                    <div class="form-group">
                        {!! Form::label('search', 'Enter keyword to search') !!}
                        {!! Form::text('search', null, ['class'=>'form-control']) !!}
                    </div>

                    <div>

                        {!! Form::submit('Search Catalog', ['class'=>'btn btn-primary']) !!}

                    </div>

                {!! Form::close() !!}

                @if($books)
                    <p></p>
                    <p></p>
                    <h2>Search Results</h2>

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
                        </tbody>
                    </table>



                @endif

                {{--<div class="card">--}}
                    {{--<div class="card-header">Dashboard</div>--}}

                    {{--<div class="card-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--You are logged in!--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

@endsection
