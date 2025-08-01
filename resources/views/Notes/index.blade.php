@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Notes</h2>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Create New Note</a>

    @foreach ($notes as $note)
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>{{ $note->title }}</strong>
                <div>
                    <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <a href="{{ route('notes.download', $note->id) }}" class="btn btn-sm btn-success">Download</a>

                    <button class="btn btn-sm btn-outline-primary" onclick="printNote({{ $note->id }})">Print</button>

                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            <div class="card-body" id="note-content-{{ $note->id }}">
                {!! $note->content !!}
            </div>
        </div>
    @endforeach
</div>
@endsection

@push('scripts')
<script>
    function printNote(noteId) {
        let content = document.getElementById('note-content-' + noteId).innerHTML;
        let printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Print Note</title>');
        printWindow.document.write('<style>body{font-family:sans-serif;margin:20px;} .card{padding:10px;}</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<h3>Printed Note</h3>');
        printWindow.document.write(content);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>
@endpush
