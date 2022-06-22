@extends('layouts.app')

@section('content')

    <div class="container">
    
        <div class="row mb-2"><h1>Quote Form</h1></div>

        <form method="post" action="{{ route('rfq_post') }}"> @csrf
            <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="container-fluid">
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="project_name">Poject name:</span>
                                <input type="text" class="form-control" id="project_name" name="project_name" placeholder="The name of your project" aria-describedby="project_name">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="volume">Volume</label>
                                    <input class="form-control" type="text" name="volume" id="volume" placeholder="example: 120000">
                                    <div class="form-text">Volume of pieces manufacturated per year.</div>
                                </div>
                
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="days_year">Days / Year</label>
                                    <input class="form-control" type="text" name="days_year" id="days_year" placeholder="example: 310">
                                    <div class="form-text">Days worked per year.</div>
                                </div>
                
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="shifts">Shifts</label>
                                    <input class="form-control" type="text" name="shifts" id="shifts" placeholder="example: 2">
                                    <div class="form-text">Number of shifts per day.</div>
                                </div>
                
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="hours_shift">Hours / Shift</label>
                                    <input class="form-control" type="text" name="hours_shift" id="hours_shift" placeholder="example: 7.25">
                                    <div class="form-text">Hours worked per shift.</div>
                                </div>
                
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="tech_availibility">Tech Availability</label>
                                    <input class="form-control" type="text" name="tech_availibility" id="tech_availibility" placeholder="example: 85">
                                    <div class="form-text">Percentage of time that is not a down time.</div>
                                </div>
                
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="kickoff_date">Kick Off Date</label>
                                    <input class="form-control" type="date" min="{{ date('Y-M-d') }}" name="kickoff_date" id="kickoff_date" placeholder="example: 2022-06-28">
                                    <div class="form-text">Deadline date to start the production.</div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="operators_required">Total Operatos Required</label>
                                    <input class="form-control" type="text" name="operators_required" id="operators_required">
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="total_robots">Total Robots</label>
                                    <input class="form-control" type="text" name="total_robots" id="total_robots" placeholder="example:6">
                                    <div class="form-text">Total robots requiered.</div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <label class="mt-3" for="area">Total Area</label>
                                    <input class="form-control" type="text" name="area" id="area" placeholder="example: 50 (sqare meters)">
                                    <div class="form-text">Area aviable for the SMA on square meters.</div>
                                </div>

                            </div>
                            <div class="row">
                                <input type="hidden" name="layout" value="">

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
        </form>
    </div>

    

    {{-- <form method="post" action="{{ route('rfq_post') }}" >
        @csrf
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <label for="" class="form-label">Volume</label>
                    <input type="text" class="form-control" name="volume">
                    <div id="emailHelp" class="form-text">Volume of pieces manufacturated per year. <br> Example: 120000</div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="" class="form-label">Days / Year</label>
                    <input type="text" class="form-control" name="days_year">
                    <div id="emailHelp" class="form-text">Days worked per year. <br> Example: 310</div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="" class="form-label">Shifts</label>
                    <input type="text" class="form-control" name="shifts">
                    <div id="emailHelp" class="form-text">Number of shifts per day. <br> Example: 2</div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="" class="form-label">Hours / Shift</label>
                    <input type="text" class="form-control" name="hours_shift">
                    <div id="emailHelp" class="form-text">Hours worked per shift. <br> Example: 7.25</div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <label for="" class="form-label">Tech Availability</label>
                    <input type="text" class="form-control" name="tech_availibility">
                    <div id="emailHelp" class="form-text">Percentage of time that is not a down time. <br> Example: 85</div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="" class="form-label">Kick Off Date</label>
                    <input type="text" class="form-control" name="kikkoff_date">
                    <div id="emailHelp" class="form-text">Deadline date to start the production. <br> Format: yyyy/mm/dd </div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="" class="form-label">Total Operatos Required</label>
                    <input type="text" class="form-control" name="operators_required">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="" class="form-label">Total Robots</label>
                    <input type="text" class="form-control" name="total_robots">
                    <div id="emailHelp" class="form-text">Total robots requiered <br> Example: 6</div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col">
                    <label for="" class="form-label">Total Area</label>
                    <input type="text" class="form-control" name="area">
                    <div id="emailHelp" class="form-text">Area aviable for the SMA on square meters. <br> Example: 50 (square meters)</div>
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <!-- <div class="col">
                    <label for="" class="form-label">Cycle Time</label>
                </div>
                <div class="col">
                    <label for="" class="form-label">Math Data Level</label>
                </div> -->
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit RFQ</button>
                </div>
            </div>
        </div>
    </form> --}}
@endsection