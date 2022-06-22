@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>My Uploaded Files</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            @if($files->count() === 0)
            <p style="color:#A4A4A4;" class="text-center h3">No files uploaded yet</p>
            @else 
            <table class="table table-striped">

                <thead>
                    <th>Filename</th>
                </thead>

                <tbody>
                    @foreach($files as $file)
                    <tr>
                        <td><a href="{{ $file->path }}" target="_blank">{{ $file->name }}</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @endif
        </div>
    </div>

@stop