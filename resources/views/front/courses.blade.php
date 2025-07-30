<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Courses - Course Hub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
        }

        header {
            background-color: #1e40af;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        header h1 {
            margin: 0;
        }

        .back-button {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #fff;
            color: #1e40af;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #e0e7ff;
        }

        h2 {
            margin: 20px;
            text-align: center;
        }

        .course-list {
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .course-item {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .course-item:hover {
            transform: translateY(-5px);
        }

        .course-item h3 {
            margin-top: 0;
            color: #1e40af;
        }

        .course-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<header>
    <a href="{{ route('front.home') }}" class="back-button">← Back to Home</a>
    <h1>All Courses</h1>
</header>

<div class="course-list">
    @foreach($courses as $course)
        <div class="course-item">
            <h3>{{ $course->title }}</h3>
            <p><strong>Price:</strong> ${{ $course->price }}</p>
        </div>
    @endforeach
</div>

</body>
</html>
