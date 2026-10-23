@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <strong>Landing Page (Public View)</strong>
                </div>

                <div class="card-body text-center py-5">
                    <h2 class="mb-3">Welcome to the Landing Page</h2>
                    <p class="text-muted">
                        This is the presentation view for unregistered users (guests).
                    </p>

                    <div class="alert alert-info text-start my-4">
                        <strong>Note:</strong> As a guest user, you can view this welcome page. To access the private <strong>Dashboard</strong>, you need to log in or register.
                    </div>

                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('login') }}" class="btn btn-primary px-4">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary px-4">Register</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">System Information</div>
                <div class="card-body">
                    <ul>
                        <li><strong>Unregistered users:</strong> View this page called <em>landingpage</em>.</li>
                        <li><strong>Registered users:</strong> Have access to the <em>dashboard</em>.</li>
                        <li><strong>Security:</strong> A guest user cannot access the dashboard route directly.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
