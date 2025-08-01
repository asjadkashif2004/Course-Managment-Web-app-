@extends('layouts.app')

@section('title', 'All Courses')

@push('styles')
<style>
    body {
        background-color: #f9fafb;
        font-family: 'Segoe UI', sans-serif;
    }

    .container-custom {
        max-width: 1200px;
        margin: auto;
        padding: 40px 20px;
    }

    .header {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
        color: #333;
    }

    .add-course-btn {
        display: inline-block;
        background-color: #4f46e5;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .add-course-btn:hover {
        background-color: #4338ca;
        transform: translateY(-2px);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    th, td {
        padding: 16px;
        text-align: left;
    }

    th {
        background-color: #f3f4f6;
        color: #444;
    }

    tr:nth-child(even) {
        background-color: #f9fafb;
    }

    .actions {
        display: flex;
        gap: 10px;
    }

    .actions a,
    .actions button {
        padding: 6px 12px;
        border-radius: 6px;
        font-weight: bold;
        border: none;
        text-decoration: none;
        cursor: pointer;
        font-size: 14px;
    }

    .edit-btn {
        background-color: #3b82f6;
        color: white;
    }

    .edit-btn:hover {
        background-color: #2563eb;
    }

    .delete-btn {
        background-color: #ef4444;
        color: white;
    }

    .delete-btn:hover {
        background-color: #dc2626;
    }

    .success-message {
        background-color: #d1fae5;
        color: #065f46;
        padding: 12px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
        border-left: 5px solid #10b981;
    }

    @media (max-width: 768px) {
        .actions {
            flex-direction: column;
        }

        th, td {
            font-size: 14px;
            padding: 10px;
        }

        .add-course-btn {
            width: 100%;
            text-align: center;
        }
    }
</style>
@endpush

@section('content')
<div class="container-custom">

    <div class="header">📚 Course Management</div>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('courses.create') }}" class="add-course-btn">➕ Add New Course</a>

    <table>
        <thead>
            <tr>
                <th>Course Title</th>
                <th>Price (Rs)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ number_format($course->price, 2) }}</td>
                    <td class="actions">
                        <a href="{{ route('courses.edit', $course->id) }}" class="edit-btn">✏️ Edit</a>

                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">🗑️ Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No courses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
