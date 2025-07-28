@extends('layouts.fe_master')

@section('content')
    <h3>Tarefa {{ $myTask->name }}</h3>

    <h6>ID: {{ $myTask->id }}</h6>
    <h6>Nome: {{ $myTask->name }} </h6>
    <h6>Pessoa responsavel: {{ $myTask->user_id }}</h6>
@endsection
