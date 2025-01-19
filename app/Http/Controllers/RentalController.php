<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Rental;
use Carbon\Carbon;

class RentalController extends Controller
{

    public function index()
    {
        $rentals = auth()->user()->rentals()->with('car')->get();
        return view('rentals.index', compact('rentals'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $car = Car::findOrFail($request->car_id);

        if (!$car->is_available) {
            return back()->with('error', 'Car is not available for the selected dates.');
        }

        $rental = Rental::create([
            'user_id' => auth()->id(),
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        $car->update(['is_available' => false]);

        return redirect()->route('rentals.index')->with('success', 'Car rented successfully!');
    }

    public function return(Request $request, Rental $rental)
    {
        if ($rental->status !== 'active') {
            return back()->with('error', 'This rental is already completed.');
        }

        $return_date = Carbon::now();
        $days = $return_date->diffInDays($rental->start_date) + 1;
        $total_cost = $days * $rental->car->daily_rate;

        $rental->update([
            'return_date' => $return_date,
            'total_cost' => $total_cost,
            'status' => 'completed',
        ]);

        $rental->car->update(['is_available' => true]);

        return redirect()->route('rentals.index')->with('success', 'Car returned successfully!');
    }

}
