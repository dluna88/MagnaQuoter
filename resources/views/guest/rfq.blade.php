@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>Quote Form</h1>
    </div>

    <form method="post" action="{{ route('rfq_post') }}" >
        @csrf
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <label for="" class="form-label">Volume</label>
                    <input type="text" class="form-control" name="volume">
                    <div id="emailHelp" class="form-text">Volume of pieces manufacturated per year. <br> Example: 120000</div>
                </div>
                <div class="col">
                    <label for="" class="form-label">Days / Year</label>
                    <input type="text" class="form-control" name="days_year">
                    <div id="emailHelp" class="form-text">Days worked per year. <br> Example: 310</div>
                </div>
                <div class="col">
                    <label for="" class="form-label">Shifts</label>
                    <input type="text" class="form-control" name="shifts">
                    <div id="emailHelp" class="form-text">Number of shifts per day. <br> Example: 2</div>
                </div>
                <div class="col">
                    <label for="" class="form-label">Hours / Shift</label>
                    <input type="text" class="form-control" name="hours_shift">
                    <div id="emailHelp" class="form-text">Hours worked per shift. <br> Example: 7.25</div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <label for="" class="form-label">Tech Availability</label>
                    <input type="text" class="form-control" name="tech_availibility">
                    <div id="emailHelp" class="form-text">Percentage of time that is not a down time. <br> Example: 85</div>
                </div>
                <div class="col">
                    <label for="" class="form-label">Kick Off Date</label>
                    <input type="text" class="form-control" name="kikkoff_date">
                    <div id="emailHelp" class="form-text">Deadline date to start the production. <br> Format: yyyy/mm/dd </div>
                </div>
                <div class="col">
                    <label for="" class="form-label">Total Operatos Required</label>
                    <input type="text" class="form-control" name="operators_required">
                </div>
                <div class="col">
                    <label for="" class="form-label">Total Robots</label>
                    <input type="text" class="form-control" name="total_robots">
                    <div id="emailHelp" class="form-text">Total robots requiered <br> Example: 6</div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col">
                    <label for="" class="form-label">Total Area</label>
                    <input type="text" class="form-control" name="area">
                    <div id="emailHelp" class="form-text">Area aviable for the SMA on square meters. <br> Example: 50 (square meters)</div>
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
    </form>
@endsection