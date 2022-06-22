@extends('layouts.app')

@section('content')

<div class="container">
    
    {{-- File upload form --}}
    <div class="row">
        <div class="col-4">
            <form method="post" enctype="multipart/form-data" id="upload-file" action="{{ route('upload_post') }}">
                @error('file')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                @isset($status)
                <div class="alert alert-success mt-1 mb-1">{{ $status }}</div>
                @endisset
                @csrf
                <label for="formFile" class="form-label mt-2">
                    <h4><i class="fa-solid fa-paperclip"></i> Upload file</h4>
                </label>
                <input class="form-control" type="file" name="file" id="formFile">
                <div class="row m-1 d-grid">
                    <button class="mt-2 btn btn-primary" type="submit">Upload</button>
                </div>
                
            </form>
        </div>
        <div class="col-8">

            <div class="card">
                <div class="card-body">
                    <h2>Uploaded files</h2>
                    <hr>
                    @if($files->count() === 0)

                    <h2 class="text-center" style="color:#A4A4A4;">NO FILES UPLOADED YET</h2>

                    @else

                    <table class="table table-striped">
                        <thead>
                            <th>File name</th>
                        </thead>
                        <tbody>
                        @foreach ($files as $file)
                            <tr>
                                <td><a href="{{ $file->path }}" target="_blank">{{ $file->name }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>

        </div>
    </div>


    {{-- Uploaded file list --}}

    <div class="row mt-5">
        <div class="col">

            

        </div>
    </div>

</div>

@stop