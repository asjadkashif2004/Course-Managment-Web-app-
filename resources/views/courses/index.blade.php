<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Course Management</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('courses.create') }}" class="bg-blue-500 text-black px-4 py-2 rounded">Add Course</a>

        @if(session('success'))
            <div class="text-green-600 mt-4">{{ session('success') }}</div>
        @endif

        <div class="mt-6">
            <table class="w-full table-auto border">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Title</th>
                        <th class="border px-4 py-2">Price</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td class="border px-4 py-2">{{ $course->title }}</td>
                            <td class="border px-4 py-2">Rs {{ $course->price }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('courses.edit', $course->id) }}" class="text-blue-600">Edit</a> |
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button onclick="return confirm('Delete course?')" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
