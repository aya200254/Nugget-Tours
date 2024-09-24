<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flight Booking</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Flight Booking</h2>

    <form action="{{ route('flights.book', $flight->id) }}" method="POST">
        @csrf

        <h3>Flight Details</h3>
        <p><strong>Flight Number:</strong> {{ $flight->flight_number }}</p>
        <p><strong>From:</strong> {{ $flight->departure_city }}</p>
        <p><strong>To:</strong> {{ $flight->arrival_city }}</p>
        <p><strong>Departure Date:</strong> {{ $flight->departure_date }}</p>
        <p><strong>Price:</strong> ${{ $flight->price }}</p>

        <h3>Passenger Information</h3>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>

        <button type="submit" class="btn">Book Flight</button>
    </form>
</div>

</body>
</html>
