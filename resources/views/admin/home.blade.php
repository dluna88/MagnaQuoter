@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Pending quote requests</h5>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('admin.pending') }}" class="btn btn-primary">Open tool <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Generate a quote</h5>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('rfq') }}" class="btn btn-primary">Open tool <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            
        </div>
    </div>
    
@stop
