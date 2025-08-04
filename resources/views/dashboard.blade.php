@extends('layouts.app')

@section('header')
    <h2 class="dashboard-title">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            padding: 20px;
            border-bottom: 2px solid #eee;
            background-color: #f8fafc;
        }
        .container-dashboard {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 220px;
            background-color: #2d3748;
            color: #fff;
            padding: 20px;
        }
        .sidebar h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            color: #cbd5e0;
            text-decoration: none;
            margin-bottom: 12px;
            padding: 8px 10px;
            border-radius: 6px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: #4a5568;
            color: #fff;
        }
        .content {
            flex: 1;
            padding: 30px;
            background-color: #f1f5f9;
        }
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }
        .course-card {
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 20px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }
        .course-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transform: translateY(-5px);
        }
        .course-title {
            font-size: 20px;
            font-weight: 600;
            color: #1a202c;
            margin-bottom: 8px;
        }
        .course-desc {
            color: #4a5568;
            margin-bottom: 10px;
        }
        .course-price {
            color: #059669;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .view-link {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }
        .view-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container-dashboard {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                text-align: center;
            }
        }
    </style>

    <div class="container-dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>📂 Menu</h3>
            <a href="{{ url('/dashboard') }}">🏠 Dashboard</a>
            <a href="{{ url('/courses') }}">📚 Courses</a>
            <a href="#">📝 Enrollments</a>
            <a href="{{ url('/notes') }}">🗒️ Notes</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                🚪 Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h3 style="font-size: 24px; font-weight: 600; margin-bottom: 20px;">📚 Available Courses</h3>

            @if ($courses->isEmpty())
                <p style="color: #6b7280;">No courses available.</p>
            @else
                <div class="courses-grid">
                    @foreach ($courses as $course)
                        <div class="course-card">
                            <div class="course-title">{{ $course->title }}</div>
                            <div class="course-desc">{{ Str::limit($course->description, 100) }}</div>
                            <div class="course-price">Rs {{ $course->price }}</div>
                            <a href="{{ url('/courses/' . $course->id) }}" class="view-link">View Details →</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
