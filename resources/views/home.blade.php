@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center font-weight-bold">
                        {{ __('Dashboard') }}
                    </div>

                    <div class="card-body text-center">

                        {{-- Admin View --}}
                        @if(Auth::user()->role_id == 1)
                            <h4 class="mb-3">Welcome, Admin {{ Auth::user()->name }}</h4>
                            <p class="text-muted">You have full access to manage the system.</p>

                            <div class="d-flex flex-wrap justify-content-center mt-4">
                                <a href="#" class="btn btn-dark m-2">Manage Users</a>
                                <a href="#" class="btn btn-outline-dark m-2">System Settings</a>
                                <a href="#" class="btn btn-outline-dark m-2">View Reports</a>
                            </div>

                            {{-- Teacher View --}}
                        @elseif(Auth::user()->role_id == 2)
                            <h4 class="mb-3">Welcome, Teacher {{ Auth::user()->name }}</h4>
                            <p class="text-muted">Here are your teaching tools and resources.</p>

                            <div class="d-flex flex-wrap justify-content-center mt-4">
                                <a href="#" class="btn btn-dark m-2">Class Schedule</a>
                                <a href="#" class="btn btn-outline-dark m-2">Student Grades</a>
                                <a href="#" class="btn btn-outline-dark m-2">Assignments</a>
                            </div>

                            {{-- Student View --}}
                        @elseif(Auth::user()->role_id == 3)
                            <h4 class="mb-3">Welcome, {{ Auth::user()->name }}</h4>
                            <p class="text-muted">Check your progress and upcoming activities.</p>

                            <div class="d-flex flex-wrap justify-content-center mt-4">
                                <a href="#" class="btn btn-dark m-2">My Grades</a>
                                <a href="#" class="btn btn-outline-dark m-2">Class Schedule</a>
                                <a href="#" class="btn btn-outline-dark m-2">Reminders</a>
                            </div>
                        @else
                            <h4 class="mb-3">Welcome, {{ Auth::user()->name }}</h4>
                            <p class="text-muted">Your role has not been set yet. Please contact admin.</p>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection