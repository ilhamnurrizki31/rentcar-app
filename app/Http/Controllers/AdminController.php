<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rental;

class AdminController extends Controller
{
    public function indexRent(Request $request)
    {
        $query = Rental::query();

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->whereHas('car', function ($q) use ($search) {
                $q->where('brand', 'like', "%$search%");
            });
            $query->orWhere('rentals.status', 'like', "%$search%");
        }

        $rentalsall = $query->with('car')->get(); // Eager loading car

        return view('admin.indexrent', compact('rentalsall'));
    }




}
