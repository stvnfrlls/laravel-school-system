@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Student Dashboard</h2>
        <p class="text-muted">Welcome, {{ Auth::user()->name }}. Here’s your student portal.</p>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>My Schedule</h5>
                        <p>View your class timetable and upcoming lessons.</p>
                        <a href="#" class="btn btn-info btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Assignments</h5>
                        <p>Check and submit your assignments.</p>
                        <a href="#" class="btn btn-info btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Grades</h5>
                        <p>Track your academic performance.</p>
                        <a href="#" class="btn btn-info btn-sm">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection