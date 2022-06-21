@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Registred Users</h1>
            <div class="card-tools"><span class="badge badge-primary float-rigth">Total: {{ $users->count() }}</span></div>
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
                    <th>Actions</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Actions">
                                <button type="button" class="btn btn-secondary"><i class="fas fa-ban"></i> Block</button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @endif

        </div>
    </div>

@stop

@section('content')



@stop