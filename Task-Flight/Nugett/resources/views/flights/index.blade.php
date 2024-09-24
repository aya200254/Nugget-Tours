@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Flights</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-3 text-right">
            <a href="{{ route('flights.create') }}" class="btn btn-primary">Create New Flight</a>
        </div>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Departure City</th>
                    <th>Arrival City</th>
                    <th>Departure Date</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                    <tr>
                        <td>{{ $flight->departure_city }}</td>
                        <td>{{ $flight->arrival_city }}</td>
                        <td>{{ $flight->departure_date }}</td>
                        <td>${{ number_format($flight->price, 2) }}</td>
                        <td>
                            <a href="{{ route('flights.edit', $flight) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('flights.destroy', $flight) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this flight?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
