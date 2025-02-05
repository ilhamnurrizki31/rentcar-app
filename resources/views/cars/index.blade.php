@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">🚗 Available Cars</h2>
    
    <form action="{{ route('cars.index') }}" method="GET" class="mb-4">
        <div class="input-group shadow-sm">
            <input type="text" name="search" class="form-control rounded-start me-2" placeholder="Search by brand or model">
            <button type="submit" class="btn btn-primary px-4">🔍 Search</button>
        </div>
    </form>
    
    <div class="row">
        @foreach($cars as $car)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('cars.png') }}" class="img-thumbnail" alt="{{ $car->brand }} {{ $car->model }}">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $car->brand }} {{ $car->model }}</h5>
                    <p class="card-text text-muted small">
                        Plate: <strong>{{ $car->plate_number }}</strong> <br>
                        Daily Rate: <span class="text-success fw-bold">Rp {{ number_format($car->daily_rate, 0, ',', '.') }}</span>
                    </p>
                    
                    <form action="{{ route('rentals.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <div class="mb-2">
                            <label class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" required min="{{ now()->format('Y-m-d') }}" max="{{ now()->addYears(1)->format('Y-m-d') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" required min="{{ now()->addDay()->format('Y-m-d') }}" max="{{ now()->addYears(1)->format('Y-m-d') }}">
                        </div>
                        <button type="submit" class="btn btn-success w-100 rounded-pill">🚀 Rent Now</button>
                    </form>
                    
                    @if (Auth::user()->role === 'admin')
                    <div class="d-flex gap-2 mt-3">
                        <a href="{{ route('cars.edit', ['car' => $car->id]) }}" class="btn btn-info w-50 rounded-pill">✏️ Edit</a>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="w-50">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100 rounded-pill" onclick="return confirm('Are you sure you want to delete this car?')">🗑️ Delete</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
