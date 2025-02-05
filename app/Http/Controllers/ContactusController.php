<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contactus::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent. Thank you!',
        ]);
    }
}
