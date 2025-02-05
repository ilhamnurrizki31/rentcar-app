@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h5>Welcome, {{ Auth::user()->name }}!</h5>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Rental Cars</h5>
                                    <p class="card-text">Browse available cars for rent.</p>
                                    <a href="{{ route('cars.index') }}" class="btn btn-primary">View Cars</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Create Rental Cars</h5>
                                    <p class="card-text">create new cars for rent.</p>
                                    <a href="{{ route('cars.create') }}" class="btn btn-primary">Create Cars</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">My Rentals</h5>
                                    <p class="card-text">View your active and past rentals.</p>
                                    <a href="{{ route('rentals.index') }}" class="btn btn-primary">View Rentals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection