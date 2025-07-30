<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 leading-tight tracking-wide">
             Course Management
        </h2>
    </x-slot>

    <!-- Custom CSS for Styling -->
    <style>
        .action-btn {
            transition: all 0.3s ease;
        }
        .action-btn:hover {
            text-decoration: underline;
        }
        .table-row:hover {
            background-color: #c3c9cfff;
        }
        .table-row {
            transition: background-color 0.3s ease;
        }
        .add-course-btn {
        background-color: #12a6f0ff; 
        color: white;
        transition: 0.3s all ease-in-out;
    }

    .add-course-btn:hover {
        background-color: #3f3f3fff; 
        box-shadow: 0 4px 14px rgba(30, 64, 175, 0.4);
        transform: scale(1.05);
        
    </style>

    <div class="p-6 bg-gray-50 min-h-screen">
        <!-- Add Course Button -->
        <div class="flex justify-between items-center mb-4">
        <a href="{{ route('courses.create') }}" class="add-course-btn px-5 py-2 rounded font-semibold shadow-md inline-block">
    ➕ Add New Course
</a>    
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Courses Table -->
        <div class="overflow-x-auto shadow-md rounded-lg bg-white p-4">
            <table class="min-w-full text-left text-sm border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold tracking-wider">
                        <th class="border px-6 py-3">Title</th>
                        <th class="border px-6 py-3">Price</th>
                        <th class="border px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800">
                    @foreach ($courses as $course)
                        <tr class="table-row border-t">
                            <td class="border px-6 py-4 font-medium">{{ $course->title }}</td>
                            <td class="border px-6 py-4">Rs {{ $course->price }}</td>
                            <td class="border px-6 py-4">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('courses.edit', $course->id) }}" class="text-blue-600 action-btn">✏️ Edit</a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure you want to delete this course?')" class="text-red-600 action-btn">🗑️ Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
