<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Http\Request;

class FlightController extends Controller
{


    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {
        return view('flights.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'departure_city' => 'required|string',
            'arrival_city' => 'required|string',
            'departure_date' => 'required|date',
            'price' => 'required|numeric',
        ]);
    
        Flight::create($validatedData);
    
        return redirect()->route('flights.index')->with('success', 'Flight created successfully.');
    }

    
    public function edit(Flight $flight)
    {
        return view('flights.edit', compact('flight'));
    }

  
    public function update(Request $request, Flight $flight)
    {
        $validatedData = $request->validate([
            'departure_city' => 'required|string',
            'arrival_city' => 'required|string',
            'departure_date' => 'required|date',
            'price' => 'required|numeric',
        ]);

        $flight->update($validatedData);
        return redirect()->route('flights.index')->with('success', 'Flight updated successfully.');
    }


    public function destroy(Flight $flight)
{
    $flight->delete();

    return redirect()->route('flights.index')->with('success', 'Flight deleted successfully.');
}

 
    public function showSearchForm()
    {
        return view('flights.flightform');
    }

    public function searchFlights(Request $request)
    {
        $validatedData = $request->validate([
            'departure_city' => 'required|string',
            'arrival_city' => 'required|string',
            'departure_date' => 'required|date',
        ]);

        // Search for flights in the database
        $flights = Flight::where('departure_city', $validatedData['departure_city'])
            ->where('arrival_city', $validatedData['arrival_city'])
            ->where('departure_date', $validatedData['departure_date'])
            ->get();

        return view('flights.results', compact('flights'));
    }

    public function showBookingForm($flightId)
{
    $flight = Flight::findOrFail($flightId);
    return view('flights.booking', compact('flight'));
}

public function bookFlight(Request $request, $flightId)
{
    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
    ]);

 
    Booking::create([
        'flight_id' => $flightId,
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
    ]);

   
    return redirect()->route('flights.search.form')->with('success', 'Flight booked successfully!');
}
}
