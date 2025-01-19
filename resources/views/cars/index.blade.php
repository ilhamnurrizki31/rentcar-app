@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Available Cars</h2>
    <form action="{{ route('cars.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by brand or model">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->brand }} {{ $car->model }}</h5>
                    <p class="card-text">
                        Plate Number: {{ $car->plate_number }}<br>
                        Daily Rate: Rp {{ number_format($car->daily_rate, 0, ',', '.') }}
                    </p>
                    <form action="{{ route('rentals.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="date" name="start_date" class="form-control" required min="{{ now()->format('Y-m-d') }}" max="{{ now()->addYears(1)->format('Y-m-d') }}">
                        </div>
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="date" name="end_date" class="form-control" required min="{{ now()->addDay()->format('Y-m-d') }}" max="{{ now()->addYears(1)->format('Y-m-d') }}">
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Rent Now</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection