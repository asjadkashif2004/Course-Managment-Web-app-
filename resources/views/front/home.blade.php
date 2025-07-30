<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Hub - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #e0e0e0;
        }
        header {
            background-color: #111;
            color: #fff;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 50px;
            margin-right: 15px;
        }
        .logo h1 {
            font-size: 2rem;
            margin: 0;
            color: #f1f1f1;
        }
        nav a {
            color: #ccc;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ffffff;
        }
        main {
            padding: 80px 20px;
            text-align: center;
        }
        main h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ffffff;
        }
        main p {
            font-size: 1.2rem;
            color: #b0b0b0;
            margin-bottom: 35px;
        }
        .cta-button {
            background-color: #444;
            color: #fff;
            padding: 14px 30px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        .cta-button:hover {
            background-color: #666;
            transform: scale(1.03);
        }
        footer {
            background-color: #111;
            color: #888;
            text-align: center;
            padding: 25px;
            font-size: 0.9rem;
            margin-top: 60px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <!-- Replace the src below with your actual logo URL -->
        <img src="https://www.freeiconspng.com/uploads/courses-icon-12.png" alt="Course Hub Logo">
        <h1>Course Hub</h1>
    </div>
    <nav>
        <a href="{{ route('front.home') }}">Home</a>
        <a href="{{ route('front.courses') }}">Courses</a>
        <a href="{{ route('front.about') }}">About</a>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    </nav>
</header>

<main>
    <h2>Welcome to Course Hub</h2>
    <p>Discover quality courses tailored for your success and growth.</p>
    <a href="{{ route('front.courses') }}">
        <button class="cta-button">View All Courses</button>
    </a>
</main>

<footer>
    <p>&copy; 2025 Course Hub. All rights reserved.</p>
</footer>

</body>
</html>
