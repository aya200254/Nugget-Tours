<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome | Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS (already included in Laravel) -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }

            .container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                color: #fff;
                text-align: center;
            }

            .card {
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 12px;
                padding: 30px;
                backdrop-filter: blur(10px);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                transition: transform 0.3s ease-in-out;
            }

            .card:hover {
                transform: translateY(-10px);
            }

            .button {
                display: inline-block;
                margin: 10px;
                padding: 12px 20px;
                font-size: 1.2rem;
                color: white;
                background-color: #FF2D20;
                border-radius: 6px;
                transition: background-color 0.3s;
                text-decoration: none;
            }

            .button:hover {
                background-color: #e62b1d;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card">
                <h1 class="text-4xl font-bold mb-6">Welcome to Laravel</h1>

                @if (Route::has('login'))
                    <nav class="flex justify-center">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="button">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="button">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="button">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </body>
</html>
