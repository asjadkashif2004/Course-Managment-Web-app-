<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight tracking-wide">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Custom UI Enhancements -->
    <style>
        h2 {
            letter-spacing: 0.5px;
        }
        .course-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .course-title {
            color: #1a202c;
        }
        .course-price {
            color: #047857;
        }
        .dashboard-heading {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .view-link {
            color: #2563eb;
            font-weight: 500;
        }
        .view-link:hover {
            text-decoration: underline;
            color: #1d4ed8;
        }
    </style>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Message -->
            
            <!-- Courses Section -->
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="dashboard-heading">📚 Available Courses</h3>

                    @if ($courses->isEmpty())
                        <p class="text-gray-500">No courses available.</p>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($courses as $course)
                                <div class="course-card border rounded-lg p-5 bg-white shadow-sm">
                                    <h4 class="text-xl font-semibold mb-2 course-title">{{ $course->title }}</h4>
                                    <p class="text-gray-700 mb-2">{{ Str::limit($course->description, 100) }}</p>
                                    <p class="text-lg font-semibold mb-2 course-price">Rs {{ $course->price }}</p>
                                    <a href="{{ url('/courses/' . $course->id) }}" class="view-link">View Details</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
