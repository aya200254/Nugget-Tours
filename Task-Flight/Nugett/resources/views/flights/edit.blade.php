@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Edit Flight</h1>

        <form action="{{ route('flights.update', $flight) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="departure_city" class="form-label">Departure City:</label>
                <input type="text" name="departure_city" id="departure_city" class="form-control" value="{{ old('departure_city', $flight->departure_city) }}">
                @error('departure_city') 
                    <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>

            <div class="mb-3">
                <label for="arrival_city" class="form-label">Arrival City:</label>
                <input type="text" name="arrival_city" id="arrival_city" class="form-control" value="{{ old('arrival_city', $flight->arrival_city) }}">
                @error('arrival_city') 
                    <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>

            <div class="mb-3">
                <label for="departure_date" class="form-label">Departure Date:</label>
                <input type="date" name="departure_date" id="departure_date" class="form-control" value="{{ old('departure_date', $flight->departure_date) }}">
                @error('departure_date') 
                    <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $flight->price) }}">
                @error('price') 
                    <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
