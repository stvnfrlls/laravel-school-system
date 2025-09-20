@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Admin Dashboard</h2>
        <p class="text-muted">Welcome, {{ Auth::user()->name }}. You have full control of the system.</p>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Manage Users</h5>
                        <p>View, edit, and assign roles to users.</p>
                        <a href="#" class="btn btn-primary btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>System Settings</h5>
                        <p>Configure global system preferences.</p>
                        <a href="#" class="btn btn-primary btn-sm">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Reports</h5>
                        <p>Generate and view system-wide reports.</p>
                        <a href="#" class="btn btn-primary btn-sm">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection