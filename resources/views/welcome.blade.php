@extends('layouts.app')

@section('content')
    <div class="container text-center py-5">
        <h1 class="mb-3">Welcome to the Student Information System</h1>
        <p class="lead mb-5 text-muted">A simple platform for managing students, teachers, and administrators.</p>

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="accent">Student Grades</h5>
                    <p>Manage and track student grades with accuracy and transparency.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="accent">Class Scheduling</h5>
                    <p>Create and manage schedules seamlessly for teachers and students.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="accent">Reminders</h5>
                    <p>Keep students updated with important reminders and announcements.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="accent">Assignments</h5>
                    <p>Teachers can post assignments, and students can track submissions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="accent">Student Records</h5>
                    <p>Maintain updated student records, including graduation status.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="accent">Transport & Reservations</h5>
                    <p>Manage transport services and reserve rooms or laboratories.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        body {
            background-color: #f9f9f9;
            color: #212529;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .feature-card {
            border: none;
            border-radius: 10px;
            padding: 1.5rem;
            background: #fff;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease-in-out;
        }

        .feature-card:hover {
            transform: translateY(-3px);
        }

        .accent {
            color: #007bff;
        }
    </style>
@endpush