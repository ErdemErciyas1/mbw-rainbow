@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/students" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

    <h2 class="text-center">Student Bewerken</h2><br>

    {!! Form::open(['action' => ['StudentsController@update', $student->id], 'method' => 'POST']) !!}
    @csrf

    <div class="form-group">
         {{Form::label('name', 'naam')}}
         {{Form::text('name', $student->name, ['class' => 'form-control', 'placeholder' => 'Naam...', 'required' => 'autofocus'])}}
        </div>

          {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Student Bewerken', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!}
  </div>
@endsection
