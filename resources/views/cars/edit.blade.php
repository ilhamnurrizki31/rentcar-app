@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Car</div>
                <div class="card-body">
                    <form action="{{ route('cars.update', $car->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" name="brand" class="form-control" value="{{ $car->brand }}" required>
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="model" class="form-control" value="{{ $car->model }}" required>
                        </div>
                        <div class="form-group">
                            <label>Plate Number</label>
                            <input type="text" name="plate_number" class="form-control" value="{{ $car->plate_number }}" required>
                        </div>
                        <div class="form-group">
                            <label>Daily Rate</label>
                            <input type="number" name="daily_rate" class="form-control" value="{{ $car->daily_rate }}" required>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection