<x-app-layout>
    <!-- Bootstrap 5 CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container">
        <h2>Add New Course</h2>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <label for="title">Course Title:</label><br>
            <input type="text" name="title" required><br><br>

            <label for="price">Price:</label><br>
            <input type="number" name="price" required><br><br>

            <label for="description">Details:</label><br>
            <textarea name="description" required></textarea><br><br>

            <button type="submit">Add Course</button>
        </form>
    </div>
</x-app-layout>
