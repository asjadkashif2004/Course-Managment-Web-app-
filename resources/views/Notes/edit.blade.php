@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Note</h2>

    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title', $note->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ old('content', $note->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Note</button>
    </form>
</div>
@endsection
