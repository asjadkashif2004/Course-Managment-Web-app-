<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $course->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="card-title text-primary">{{ $course->title }}</h2>
                <p class="card-text">{{ $course->description }}</p>
                <p class="card-text"><strong class="text-success">Rs {{ $course->price }}</strong></p>

                <a href="{{ url('/courses') }}" class="btn btn-outline-secondary mt-3">← Back to All Courses</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional for interactive features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
