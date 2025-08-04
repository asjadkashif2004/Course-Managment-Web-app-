@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Note</h2>

    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $note->title }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea id="summernote" name="content" class="form-control" rows="10">{{ $note->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Note</button>
    </form>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Write your note here...',
            tabsize: 2,
            height: 300
        });
    });
</script>
@endpush
