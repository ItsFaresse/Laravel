@extends('layouts/layoutBack')

@section('content')


    {!! Form::model($Category, ['method'=> "PATCH", 'action'=> ["AdminCategoriesController@update", $Category->id], 'files' => true]) !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', null, ['class' => 'form-control form-control-sm'])!!} <br />

    {!! Form::submit('Mettre à jour', ['class' => "btn btn-success"])!!}

    {!! Form::file('file', null) !!}<br />

    {!! Form::close() !!}




    {!! Form::open(['method'=> "DELETE", 'action'=> ["AdminCategoriesController@destroy", $Category->id]]) !!}

    {!! Form::submit('Supprimer', ['class' => "btn btn-danger"])!!}

    {!! Form::close() !!}






@stop