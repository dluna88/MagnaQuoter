@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Setup a custom layout</h5>
                    <p class="card-text">Drag and drop tool to easy setp a custom layout of equipment.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('layout') }}" class="btn btn-primary">Open tool <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Generate a quote</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('rfq') }}" class="btn btn-primary">Open tool <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            
        </div>
    </div>
    
</div>

@endsection
