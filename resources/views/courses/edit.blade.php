<x-app-layout>
    <!-- Bootstrap 5 CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5 bg-dark text-white p-5 rounded shadow">
        <h2 class="mb-4">Edit Course</h2>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Course Title:</label>
                <input type="text" name="title" id="title" value="{{ $course->title }}" class="form-control bg-secondary text-white" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price" id="price" value="{{ $course->price }}" class="form-control bg-secondary text-white" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Details:</label>
                <textarea name="description" id="description" rows="4" class="form-control bg-secondary text-white" required>{{ $course->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
</x-app-layout>
