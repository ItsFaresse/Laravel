@extends('layouts/layoutBack')

@section('content')

   

    {!! Form::open(['method' => 'POST', 'action' => ['AdminCategoriesController@store'], 'files' => true]) !!}

    {!! Form::label('name', 'Nom') !!}

    {!! Form::text('name', null, ['class' => 'form-control form-control-sm'])!!} <br />

    {!! Form::file('file',['class' => 'btn btn-light' ], null) !!} </br>

    {!! Form::submit('Créer la catégorie', ['class' => 'btn btn-success']) !!}






    {!! Form::close() !!}


    @stop