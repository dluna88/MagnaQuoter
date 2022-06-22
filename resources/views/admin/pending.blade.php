@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pending Quotes</h1>
@stop

@section('content')
    <div class="row mt-2">
        <div class="col">
            <div class="card">
                
                <div class="card-body">

                    @if($quotes->count() === 0)
                    <div class="row">
                        <p style="color:#a4a4a4">
                        No pending quotes to review
                        </p>    
                    </div>
                    @else

                    <table class="table     table-striped">
                    
                        <thead>
                            <th>Project name</th>
                            <th>volume</th>
                            <th>kick off date</th>
                            <th>Client</th>
                        </thead>

                        <tbody>
                        @foreach($quotes as $quote)
                            <tr>
                                <td>{{ $quote->project_name }}</td>
                                <td>{{ $quote->volume }}</td>
                                <td>{{ $quote->kickoff_date }}</td>
                                <td>{{ $client->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
    
@stop