@extends('layouts.app')

@section('content')
    <!-- Bootstrap CSS (if not already included in layouts.app) -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5">
        <h1 class="text-center">Create Flight</h1>

        <form action="{{ route('flights.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="form-group">
                <label for="departure_city">Departure City:</label>
                <input type="text" name="departure_city" id="departure_city" class="form-control" value="{{ old('departure_city') }}">
                @error('departure_city') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="arrival_city">Arrival City:</label>
                <input type="text" name="arrival_city" id="arrival_city" class="form-control" value="{{ old('arrival_city') }}">
                @error('arrival_city') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="departure_date">Departure Date:</label>
                <input type="date" name="departure_date" id="departure_date" class="form-control" value="{{ old('departure_date') }}">
                @error('departure_date') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}">
                @error('price') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </form>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
