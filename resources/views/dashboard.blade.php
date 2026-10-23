@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <strong>Dashboard (Private View)</strong>
                </div>

                <div class="card-body">
                    <h2 class="mb-3">Dashboard</h2>

                    <div class="alert alert-success" role="alert">
                        Welcome, <strong>{{ Auth::user()->name }}</strong>! You have successfully logged into the system.
                    </div>

                    <p>
                        This is the view called <strong>dashboard</strong>. Only registered and authenticated users can access here.
                    </p>

                    <hr>

                    <h5 class="mt-4">Authenticated User Details:</h5>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Name:</strong> {{ Auth::user()->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
                        <li class="list-group-item"><strong>Status:</strong> Active Session</li>
                    </ul>

                    <div class="alert alert-warning">
                        <strong>Access Control:</strong> If you log out and try to access <code>/dashboard</code>, the system will prevent access and redirect you to Login.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
