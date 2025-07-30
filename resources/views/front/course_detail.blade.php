@extends('front.home')

@section('content')
    <div class="p-4 bg-white shadow rounded">
        <h2 class="text-2xl font-bold">{{ $course->title }}</h2>
        <p class="mt-2 text-gray-600">Price: Rs {{ $course->price }}</p>
        <p class="mt-4">Full course description coming soon.</p>
        <a href="{{ route('front.courses') }}" class="mt-4 inline-block text-blue-500 hover:underline">← Back to Courses</a>
    </div>
@endsection
