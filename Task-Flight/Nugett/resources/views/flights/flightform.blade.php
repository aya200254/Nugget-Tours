<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flight Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Search for Flights</h2>
    <form action="{{ route('flights.search') }}" method="GET">
        @csrf
        <div class="form-group">
            <label for="departure_city">Departure City</label>
            <input type="text" id="departure_city" name="departure_city" required>
        </div>
        <div class="form-group">
            <label for="arrival_city">Arrival City</label>
            <input type="text" id="arrival_city" name="arrival_city" required>
        </div>
        <div class="form-group">
            <label for="departure_date">Departure Date</label>
            <input type="date" id="departure_date" name="departure_date" required>
        </div>
        <div class="form-group">
            <button type="submit">Search Flights</button>
        </div>
    </form>
</div>

</body>
</html>
