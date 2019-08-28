@extends('layouts.app')

@section('content')
    <p></p>

    <h1>Update Subject</h1>

    {!! Form::model($subject, ['method'=>'PATCH', 'action'=>['SubjectsController@update', $subject->id]]) !!}

    <div class="form-group">
            {!! Form::label('name', 'Subject Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="row">
        <div class="col-md-2">

            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>

        <div class="col-md-2">
            {!! Form::open(['method'=>'DELETE', 'action'=>['SubjectsController@destroy', $subject->id]]) !!}

            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

            {!! Form::close() !!}
        </div>

    </div>


    <div class="row">

        @include('includes.form_error')

    </div>


    @stop
