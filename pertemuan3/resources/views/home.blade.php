<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
        }
        .hero {
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            border-radius: 8px;
            margin-top: 50px;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero a {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }
        .hero a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="antialiased">
    <div class="hero">
        <h1>Selamat Datang di Website</h1>
        <h3><a href="/Profilbudi">Kapal Laut</a></h3>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
