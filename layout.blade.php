<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropertyFinder - Discover Real Estate Near You</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>Property<span>Finder</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Properties</a></li>
                    <li><a href="#">Map View</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="/sign_up" class="btn-primary">Sign In</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    @yield('content')
    <script src="landing-page-script.js"></script>
</body>

</html>
