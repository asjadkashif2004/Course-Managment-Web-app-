<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Show all courses
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // Show form to create a new course
    public function create()
    {
        return view('courses.create');
    }

    // Store a new course
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            // Add other validations as needed
        ]);

        Course::create($request->only(['title', 'price', 'description']));
        return redirect()->route('courses.index')->with('success', 'Course added successfully.');
    }

    // Show a single course
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Show form to edit a course
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // Update an existing course
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $course->update($request->only(['title', 'price', 'description']));
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    // Delete a course
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
