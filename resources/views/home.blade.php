@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
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
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Upload custom file</h5>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('upload') }}" class="btn btn-primary">Upload file <i class="fa-solid fa-file-arrow-up"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col">
            
        </div>
    </div>
    
</div>

@endsection
