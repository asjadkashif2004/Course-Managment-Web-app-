@extends('layouts.app')

@section('content')
    <style>
        .form-card {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-card h2 {
            color: #0d6efd;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            background-color: #ffffff;
            color: #000;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 8px #007bff;
            border-color: #007bff;
        }

        .btn-custom {
            background-color: #0d6efd;
            color: #fff;
            font-weight: 600;
            transition: background-color 0.3s ease-in-out;
            padding: 10px 20px;
            border-radius: 6px;
            border: none;
            margin-right: 10px;
        }

        .btn-custom:hover {
            background-color: #0b5ed7;
        }

        .back-btn {
            background-color: #0d6efd;
            color: #fff;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .back-btn:hover {
            background-color: #252627ff;
            color: #fff;
        }
    </style>

    <div class="container">
        <div class="form-card">
            <h2>Edit Course</h2>

            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Course Title</label>
                    <input type="text" name="title" id="title" value="{{ $course->title }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price (Rs)</label>
                    <input type="number" name="price" id="price" value="{{ $course->price }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Details</label>
                    <textarea name="description" id="description" rows="4" class="form-control" required>{{ $course->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-custom">✔️ Update</button>
                <a href="{{ route('courses.index') }}" class="back-btn">Back to Courses</a>
            </form>
        </div>
    </div>
@endsection
