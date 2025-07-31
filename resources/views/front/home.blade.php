<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Hub - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            background-color: #121212;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #eaeaea;
        }

        header {
            background: #1c1c1c;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 48px;
            margin-right: 15px;
        }

        .logo h1 {
            font-size: 1.8rem;
            color: #f5f5f5;
            margin: 0;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            color: #bbb;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        nav a:hover {
            color: #ffffff;
            transform: translateY(-2px);
        }

        nav a.active {
            color: #1e90ff;
        }

        main {
            text-align: center;
            padding: 100px 20px 60px;
            background: linear-gradient(to right, #1a1a1a, #181818);
        }

        main h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #f0f0f0;
        }

        main p {
            font-size: 1.3rem;
            color: #bcbcbc;
            margin-bottom: 40px;
        }

        .cta-button {
            width: 200px;
            height: 50px;
            margin: 0.5em;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            color: white;
            border: none;
            border-radius: 0.625em;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            z-index: 1;
            overflow: hidden;
            transition: color 0.4s ease;
        }

        .cta-button:hover {
            color: black;
        }

        .cta-button::after {
            content: "";
            background: rgba(255, 255, 255, 0.3);
            position: absolute;
            z-index: -1;
            left: -20%;
            right: -20%;
            top: 0;
            bottom: 0;
            transform: skewX(-45deg) scale(0, 1);
            transition: transform 0.5s ease;
        }

        .cta-button:hover::after {
            transform: skewX(-45deg) scale(1, 1);
        }

        .slideshow-container {
            position: relative;
            width: 100%;
            max-height: 420px;
            overflow: hidden;
        }

        .slide {
            display: none;
            width: 100%;
            height: 420px;
            object-fit: cover;
            animation: fade 1.5s ease-in-out;
        }

        @keyframes fade {
            from { opacity: 0.3; }
            to { opacity: 1; }
        }

        .section {
            padding: 60px 20px;
            text-align: center;
        }

        .section h3 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #ffffff;
        }

        .features, .courses {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .card {
            background-color: #1e1e1e;
            border-radius: 12px;
            padding: 25px;
            width: 280px;
            text-align: left;
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .card h4 {
            color: #3b82f6;
            margin-bottom: 10px;
        }

        .card p {
            color: #cfcfcf;
        }

        footer {
            background-color: #1a1a1a;
            text-align: center;
            padding: 25px 20px;
            font-size: 0.95rem;
            color: #888;
            border-top: 1px solid #333;
        }

        @media (max-width: 768px) {
            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .logo h1 {
                font-size: 1.5rem;
            }

            main h2 {
                font-size: 2.3rem;
            }

            .cta-button {
                width: 90%;
                max-width: 300px;
            }

            .features, .courses {
                flex-direction: column;
                align-items: center;
            }

            .slide {
                height: 220px;
            }

            .slideshow-container {
                max-height: 220px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        <img src="https://www.freeiconspng.com/uploads/courses-icon-12.png" alt="Course Hub Logo">
        <h1>Course Hub</h1>
    </div>
    <nav>
        <a href="{{ route('front.home') }}" class="{{ request()->routeIs('front.home') ? 'active' : '' }}">
            <i class="fas fa-home"></i> Home
        </a>
        <a href="{{ route('front.courses') }}" class="{{ request()->routeIs('front.courses') ? 'active' : '' }}">
            <i class="fas fa-book-open"></i> Courses
        </a>
        <a href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
        <a href="{{ route('register') }}">
            <i class="fas fa-user-plus"></i> Register
        </a>
        <a href="{{ route('front.about') }}" class="{{ request()->routeIs('front.about') ? 'active' : '' }}">
            <i class="fas fa-info-circle"></i> About
        </a>
    </nav>
</header>

<main>
    <h2>Welcome to <span style="color:#3b82f6;">Course Hub</span></h2>
    <p>Your journey to learning and growth begins here. Explore courses crafted by experts for your success.</p>
    <a href="{{ route('front.courses') }}">
        <button class="cta-button">Browse Courses</button>
    </a>
</main>

<!-- Slideshow Section -->
<section class="slideshow-container">
    <img class="slide" src="https://d35v9chtr4gec.cloudfront.net/uteach/assets/feature-courses-1.webp" alt="Slide 1">
    <img class="slide" src="https://hup.edu.pk/wp-content/uploads/2024/10/24_7_-Access-to-Courses.webp" alt="Slide 2">
    <img class="slide" src="https://trainings.internshala.com/blog/wp-content/uploads/2023/12/Best-Courses-to-Get-an-IT-Job-1.jpg" alt="Slide 3">
    <img class="slide" src="https://staticlearn.shine.com/l/m/images/blog/mobile/best_it_courses.webp" alt="Slide 4">
</section>

<section class="section" style="background-color: #141414;">
    <h3>Our Facilities</h3>
    <div class="features">
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeaPnimyJg80Pncz-7BzBguNRpDNY20twPEA&s" alt="Facilities Icon" style="width: 100%; border-radius: 50px; margin-bottom: 15px;">
            <h4><i class="fas fa-chalkboard-teacher"></i> Expert Instructors</h4>
            <p>Learn from industry professionals with years of teaching and practical experience.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRs_bSe3NPpNaxoIXu46F9A26T4ezcB_ShEuQ&s" alt="Interactive Learning" style="width: 100%; border-radius: 50px; margin-bottom: 15px;">
            <h4><i class="fas fa-certificate"></i> Verified Certifications</h4>
            <p>Receive accredited certificates on course completion to showcase your skills.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdhcuyJrSDFhV1Vny05b2htWy16xiHu0eSSQ&s" alt="Flexible Schedule" style="width: 100%; border-radius: 50px; margin-bottom: 15px;">
            <h4><i class="fas fa-clock"></i> Flexible Schedule</h4>
            <p>Study anytime, anywhere with our flexible course timings and self-paced modules.</p>
        </div>
        <div class="card">
            <img src="https://img.freepik.com/free-vector/hand-drawn-business-coffee-illustration_52683-91004.jpg" alt="Community Support" style="width: 100%; border-radius: 50px; margin-bottom: 15px;">
            <h4><i class="fas fa-comments"></i> Peer Community</h4>
            <p>Join a vibrant learner community to discuss, collaborate and grow together.</p>
        </div>
    </div>
</section>

<section class="section">
    <h3>Popular Courses</h3>
    <div class="courses">
        <div class="card">
            <img src="https://jaro-website.s3.ap-south-1.amazonaws.com/2024/07/full-stack-web-developer.png" alt="Full Stack Web Dev" style="width:100%; border-radius:10px; margin-bottom:15px;">
            <h4>Full Stack Web Development</h4>
            <p>Master front-end and back-end technologies including Laravel, React, Node.js & MySQL.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdDk32jifJKbRhp3RsY_vwmNVsqqsgt-3pTw&s" alt="Data Science & AI" style="width:100%; border-radius:10px; margin-bottom:15px;">
            <h4>Data Science & AI</h4>
            <p>Analyze data, build models, and solve problems using Python, Pandas, and machine learning.</p>
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqak8ODA7SJv7hiRHv5dtzauFSK1AmGiYusQ&s" alt="UI UX Design Fundamentals" style="width:100%; border-radius:10px; margin-bottom:15px;">
            <h4>UI/UX Design Fundamentals</h4>
            <p>Design stunning user interfaces using Figma, Adobe XD, and user research techniques.</p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2025 Course Hub. All rights reserved.</p>
</footer>

<script>
    let slideIndex = 0;
    const slides = document.getElementsByClassName("slide");

    function showSlides() {
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000);
    }

    showSlides();
</script>

</body>
</html>
