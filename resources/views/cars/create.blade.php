@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Car</div>
                <div class="card-body">
                    <form action="{{ route('cars.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" name="brand" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="model" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Plate Number</label>
                            <input type="text" name="plate_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Daily Rate</label>
                            <input type="number" name="daily_rate" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection