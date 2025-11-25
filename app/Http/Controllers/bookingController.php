<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function form()
    {
        return view('book_table');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($request) {
                    $existingBooking = Booking::where('date', $value)
                        ->where('time', $request->time)
                        ->exists();

                    if ($existingBooking) {
                        $fail('This date and time slot is already booked. Please choose another time.');
                    }
                },
            ],
            'time' => 'required',
            'people' => 'required|integer|min:1|max:20',
            'message' => 'nullable|string|max:500',
        ]);

        Booking::create($validated);

        return redirect()->back()
            ->with('success', 'Your table has been booked successfully!');
    }
}
