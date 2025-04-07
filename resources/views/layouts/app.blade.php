<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Site</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
            <a class="navbar-brand" href="{{ url('/movies') }}">Movies</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer Sections -->
    <footer class="bg-light py-5 mt-5">
        <div class="container">
            <h3>Latest News</h3>
            <p>Check out the latest updates and movie announcements.</p>

            <h3>About Us</h3>
            <p>We are a movie fan site built with Laravel. This is just a demo layout.</p>

            <h3>Contact</h3>
            <p>Email us at contact@laramovies.test or call us at 123-456-7890.</p>
        </div>
    </footer>

</body>
</html>
