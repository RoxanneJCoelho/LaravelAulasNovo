@extends('layouts.fe_master')
@section('content')
    <h4>Aqui terás todas as tarefas</h4>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Description</th>
                <th scope="col">Nome Responsável</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->username }}</td>
                     <td><a href="{{route('task.show', $task->id)}}" class="btn btn-info me-2">Ver</a><a href="{{route('task.delete', $task->id)}}" class="btn btn-danger">Apagar</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
