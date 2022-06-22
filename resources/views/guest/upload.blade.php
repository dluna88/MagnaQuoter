@extends('layouts.app')

@section('content')

<div class="container">
    
    {{-- File upload form --}}
    <div class="row">
            <form method="post" action="">
                @csrf
                <label for="formFile" class="form-label">
                    <h4><i class="fa-solid fa-paperclip"></i> Upload file</h4>
                </label>
                <div class="row">
                    <div class="col-10"><input class="form-control" type="file" id="formFile"></div>
                    <div class="col-2"><button class="btn btn-primary" type="submit">Upload</button></div>
                </div>
            </form>
    </div>


    {{-- Uploaded file list --}}

    <div class="row mt-5">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h2>Uploaded files</h2>
                </div>
            </div>

        </div>
    </div>

</div>

@stop