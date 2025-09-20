@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Teacher Dashboard</h2>
        <p class="text-muted">Welcome, {{ Auth::user()->name }}. Manage your classes and students here.</p>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>My Classes</h5>
                        <p>View schedules and class details.</p>
                        <a href="#" class="btn btn-success btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Assignments</h5>
                        <p>Create and manage student assignments.</p>
                        <a href="#" class="btn btn-success btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Grades</h5>
                        <p>Record and update student grades.</p>
                        <a href="#" class="btn btn-success btn-sm">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection