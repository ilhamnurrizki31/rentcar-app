@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Rentals</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Car</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Total Cost</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentals as $rental)
                <tr>
                    <td>{{ $rental->car->brand }} {{ $rental->car->model }}</td>
                    <td>{{ $rental->start_date }}</td>
                    <td>{{ $rental->end_date }}</td>
                    <td>{{ $rental->status }}</td>
                    <td>Rp {{ number_format($rental->total_cost, 0, ',', '.') ?? $rental->total_cost ?? '-' }}</td> 
                    <td>
                        @if($rental->status === 'active')
                        <form action="{{ route('rentals.return', $rental) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-warning">Return Car</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection