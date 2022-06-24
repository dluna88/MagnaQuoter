@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title">Quotes generated</h5>
                </div>
                <div class="card-body">
                    @if($quotes->count() === 0)
                        <div class="text-center" style="color:#A3a3a3">You have no quotes generated</div>
                    @else
                        @foreach ($quotes as $quote)
                            <div class="row">
                                <a href="{{ $quote->id }}">{{ $quote->project_name }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('rfq') }}" class="btn btn-primary">Generate new quote <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title">Files uploaded</h5>
                </div>
                <div class="card-body">
                    @if($files->count() === 0)
                        <div class="text-center" style="color:#A3a3a3">You have no files uploaded</div>
                    @else
                        @foreach ($files as $file)
                            <div class="row">
                                <a href="{{ $file->path }}">{{ $file->name }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('upload') }}" class="btn btn-primary">Upload file <i class="fa-solid fa-file-arrow-up"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col">
            <h1> Are you lost? </h1>
            <br>
            <h3> The way this page works is very simple! You have just to feel identified with one of the next statements: </h3>
                <br>
               <h4> a) I need a SMA.
                <br>
                    Go to 'Generate a quote'
                    <br>
                    <br>
                b) I already have a SMA and I want to quote it.
                <br>
                    Go to 'Upload a custom file' 
                    <br>
                    </h4>

        </div>
    </div>
    
</div>

@endsection
