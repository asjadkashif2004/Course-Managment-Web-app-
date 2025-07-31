<x-app-layout>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }

        .dashboard-container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 230px;
            background-color: #1f2937;
            color: white;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

        .sidebar h2 {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .nav-link {
            display: block;
            width: 100%;
            padding: 12px 25px;
            text-decoration: none;
            color: white;
            transition: background 0.3s ease;
        }

        .nav-link:hover {
            background-color: #374151;
        }

        .main-content {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
        }

        .header {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .add-course-button {
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s ease;
            margin-bottom: 20px;
        }

        .add-course-button:hover {
            background-color: #1e40af;
            transform: scale(1.03);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f3f4f6;
            color: #555;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f0f9ff;
        }

        .actions a, .actions button {
            margin-right: 10px;
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
            cursor: pointer;
            background: none;
            border: none;
        }

        .actions button {
            color: #dc2626;
        }

        .success-message {
            background-color: #d1fae5;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            border-left: 5px solid #10b981;
        }
    </style>

    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Course Admin</h2>
            <a href="/dashboard" class="nav-link">📊 Dashboard</a>
            <a href="{{ route('courses.create') }}" class="nav-link">➕ Add Course</a>
            <a href="{{ route('courses.index') }}" class="nav-link">📚 All Courses</a>
            </a>
             
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">Course Management Dashboard</div>

            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('courses.create') }}">
                <button class="add-course-button">➕ Add New Course</button>
            </a>

            <table>
                <thead>
                    <tr>
                        <th>Course Title</th>
                        <th>Price (Rs)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->price }}</td>
                            <td class="actions">
                                <a href="{{ route('courses.edit', $course->id) }}">✏️ Edit</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure you want to delete this course?')">🗑️ Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
