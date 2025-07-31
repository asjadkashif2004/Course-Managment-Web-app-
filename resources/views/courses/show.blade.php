<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $course->title }} | Course Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .banner {
            background: linear-gradient(to right, #4a00e0, #8e2de2);
            color: white;
            padding: 50px 20px;
            text-align: center;
            border-radius: 0 0 30px 30px;
        }

        .banner h1 {
            font-size: 2.8rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card {
            border: none;
            transition: all 0.3s ease;
            border-radius: 15px;
        }

        .card:hover {
            transform: scale(1.01);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .btn-enroll {
            background: #8e2de2;
            color: white;
            border: none;
            transition: 0.3s;
        }

        .btn-enroll:hover {
            background: #4a00e0;
        }

        .btn-back {
            background: transparent;
            border: 1px solid #8e2de2;
            color: #8e2de2;
        }

        .btn-back:hover {
            background: #8e2de2;
            color: white;
        }

        @media (max-width: 768px) {
            .banner h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <div class="banner">
        <h1>{{ $course->title }}</h1>
        <p class="lead">Enhance your skills with this course</p>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow p-4">
                    <div class="card-body">
                        <h3 class="text-dark mb-3">
                            <i class="bi bi-journal-code text-primary me-2"></i> Course Overview
                        </h3>
                        <p class="fs-5">{{ $course->description }}</p>
                        <hr>
                        <h4 class="text-success">Rs {{ $course->price }}</h4>
                    </div>
                    <div class="card-footer bg-white d-flex justify-content-between align-items-center border-0">
                        <a href="{{ url('/courses') }}" class="btn btn-back">
                            <i class="bi bi-arrow-left"></i> Back to All Courses
                        </a>
                        <button class="btn btn-enroll">
                            <i class="bi bi-cart-plus-fill me-1"></i> Enroll Now
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
