@extends('layouts.app')


@section('content')
    <p></p>

    <h1>Add Book Title</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'BooksController@store']) !!}

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

        <div>

            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    <div class="row">

        @include('includes.form_error')

    </div>


@stop