<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Courses Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Available Courses</h3>

                    @if ($courses->isEmpty())
                        <p>No courses available.</p>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($courses as $course)
                                <div class="border rounded-lg p-4 shadow">
                                    <h4 class="text-xl font-bold mb-2">{{ $course->title }}</h4>
                                    <p class="text-gray-700 mb-2">{{ Str::limit($course->description, 100) }}</p>
                                    <p class="text-green-600 font-semibold mb-2">Rs {{ $course->price }}</p>
                                    <a href="{{ url('/courses/' . $course->id) }}" class="text-blue-600 hover:underline">View Details</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
