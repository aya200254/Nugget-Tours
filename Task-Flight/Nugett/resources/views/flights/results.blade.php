<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flight Search Results</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .no-results {
            text-align: center;
            padding: 20px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Flight Search Results</h2>

    @if ($flights->isEmpty())
        <div class="no-results">No flights found matching your criteria.</div>
    @else
        <table>
            <thead>
                <tr>
                    <th>Flight Number</th>
                    <th>Departure City</th>
                    <th>Arrival City</th>
                    <th>Departure Date</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                    <tr>
                        <td>{{ $flight->flight_number }}</td>
                        <td>{{ $flight->departure_city }}</td>
                        <td>{{ $flight->arrival_city }}</td>
                        <td>{{ $flight->departure_date }}</td>
                        <td>${{ $flight->price }}</td>
                        <td>
                            <form action="{{ route('flights.book', $flight->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="text-center">
        <a href="{{ route('flights.search.form') }}" class="btn btn-secondary">Search Again</a>
    </div>
</div>
{{-- <td>
    <a href="{{ route('flights.book.form', $flight->id) }}" class="btn btn-primary">Book Now</a>
</td> --}}
</body>
</html>
