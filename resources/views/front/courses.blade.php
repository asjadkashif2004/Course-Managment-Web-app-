<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Courses - Course Hub</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #111827;
            line-height: 1.6;
        }

        header {
            background-color: #1f2937;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo img {
            height: 40px;
        }

        .logo span {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
        }

        .back-button {
            background-color: #3b82f6;
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: #2563eb;
        }

        h2 {
            text-align: center;
            font-size: 32px;
            margin: 40px 0 20px;
            font-weight: 600;
            color: #1f2937;
        }

        .course-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 28px;
            padding: 0 40px 60px;
            max-width: 1280px;
            margin: auto;
        }

        .course-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        }

        .course-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.07);
        }

        .course-item h3 {
            font-size: 20px;
            color: #1d4ed8;
            margin-bottom: 10px;
        }

        .course-item p {
            font-size: 16px;
            color: #374151;
        }

        @media (max-width: 600px) {
            .back-button {
                padding: 8px 14px;
                font-size: 14px;
            }

            h2 {
                font-size: 24px;
            }

            .course-item h3 {
                font-size: 18px;
            }

            .course-item p {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="https://www.freeiconspng.com/uploads/courses-icon-12.png" alt="Course Hub Logo">
        <span>Course Hub</span>
    </div>
    <a href="{{ route('front.home') }}" class="back-button">← Back to Home</a>
</header>

<h2>All Available Courses</h2>

<div class="course-list">
    @foreach($courses as $course)
        <div class="course-item">
            <h3>{{ $course->title }}</h3>
            <p><strong>Price:</strong> Rs {{ $course->price }}</p>
        </div>
    @endforeach
</div>

</body>
</html>
