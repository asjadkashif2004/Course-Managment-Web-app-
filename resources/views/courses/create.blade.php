<x-app-layout>
   
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
        }

        .btn-custom {
            background-color: #0d6efd;
            color: #fff;
            font-weight: 600;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #0b5ed7;
        }

        .back-btn{
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
            <h2><b><u>Add New Course</u></b></h2>

            <form action="{{ route('courses.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label"><b>Course Title</b>   </label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label"> <b> Price (Rs) </b></label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label"><b>Details</b></label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-custom">➕ Add</button>
                <!-- Back Button -->
                <a href="{{ route('courses.index') }}" class="btn back-btn">Back to Courses</a>
            </form>
        </div>
    </div>
</x-app-layout>
