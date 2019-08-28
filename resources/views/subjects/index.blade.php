@extends('layouts.app')

@section('content')
    <p></p>

    <div class="row">
        <div class="col-md-6">
            <h1>Subjects</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ action('SubjectsController@create') }}" class="btn btn-primary">Add</a>
        </div>

    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Last Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($subjects)

            @foreach($subjects as $subject)
                <tr>
                    <td>{{$subject->id}}</td>
                    <td><a href="{{route('subjects.edit', $subject->id)}}"> {{$subject->name}}</td>
                    <td>{{$subject->created_at->diffForHumans()}}</td>
                    <td>{{$subject->updated_at->diffForHumans()}}</td>
                </tr>
             @endforeach
        @endif
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">

            {{ $subjects->render() }}

        </div>
    </div>


    @stop