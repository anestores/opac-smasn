@extends('layouts.app')


@section('content')
    <p></p>

    <h1>Update Book Title</h1>

    {!! Form::model($book, ['method'=>'PATCH', 'action'=>['BooksController@update', $book->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Book Title:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('author', 'Author:') !!}
        {!! Form::text('author', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('accession_number', 'Accession Number:') !!}
        {!! Form::text('accession_number', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subject_id', 'Subject:') !!}
        {!! Form::select('subject_id', [''=>'Choose Subject'] + $subjects, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('copyright', 'Copyright:') !!}
        {!! Form::text('copyright', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('shelflocation', 'Shelf Location:') !!}
        {!! Form::text('shelflocation', null, ['class'=>'form-control']) !!}
    </div>

    <div class="row">
        <div class="col-md-2">
            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        <div class="col-md-2">
            {!! Form::open(['method'=>'DELETE', 'action'=>['BooksController@destroy', $book->id]]) !!}

            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

            {!! Form::close() !!}
        </div>
    </div>


    <div class="row">

        @include('includes.form_error')

    </div>




    @stop