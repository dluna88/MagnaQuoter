@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="row">
        <h1 class="card-title">Registred Users</h1>
    </div>
@stop

@section('content')

<div class="card">
        <div class="card-header">
            <div class="card-tools float-rigth"><span class="badge badge-primary ">Total: {{ $users->count() }}</span></div>
        </div>
        <div class="card-body">

            @if($users->count() === 0)

            <div class="row">
                <p style="color:#a4a4a4">
                No registred users
                </p>    
            </div>

            @else

            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Quote requests</th>
                    <th>Uploaded files</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $quotes->count() }}</td>
                        <td>{{ $files->count() }}</td>
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-name="{{ $user->name }}" data-id="{{ $user->id }}"><i class="fas fa-trash-alt"></i> Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @endif

        </div>
    </div>

@stop