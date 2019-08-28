@extends('layouts.app')

@section('content')
    <p></p>

    <h1>Add Subject</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'SubjectsController@store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Subject Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div>

            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}


        </div>

    {!! Form::close() !!}

    <div class="row">

        @include('includes.form_error')

    </div>



    @stop