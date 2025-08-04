@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="section-title">🗒️ Your Notes</h2>
    <a href="{{ route('notes.create') }}" class="btn btn-create mb-4">➕ Create New Note</a>

    @if($notes->isEmpty())
        <div class="alert alert-info text-center empty-message">
            You haven't created any notes yet.
        </div>
    @else
        <div class="notes-grid">
            @foreach ($notes as $note)
                <div class="note-card">
                    <div class="note-header">
                        <h5 class="note-title">{{ $note->title }}</h5>
                        <div class="note-actions">
                            <a href="{{ route('notes.edit', $note->id) }}" class="action-btn edit">✏️</a>
                            <a href="{{ route('notes.download', $note->id) }}" class="action-btn download">⬇️</a>
                            <button onclick="printNote({{ $note->id }})" class="action-btn print">🖨️</button>
                            <form action="{{ route('notes.destroy', $note->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="action-btn delete">🗑️</button>
                            </form>
                        </div>
                    </div>
                    <div class="note-content" id="note-content-{{ $note->id }}">
                        {!! Str::limit($note->content, 400, '...') !!}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<style>
    .section-title {
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }
    .btn-create {
        background-color: #28a745;
        color: white;
        border-radius: 6px;
        padding: 8px 16px;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.3s ease;
    }
    .btn-create:hover {
        background-color: #218838;
    }
    .empty-message {
        font-size: 1.1rem;
    }
    .notes-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }
    .note-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        display: flex;
        flex-direction: column;
        transition: box-shadow 0.2s ease;
    }
    .note-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }
    .note-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }
    .note-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #007bff;
        margin: 0;
        flex: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .note-actions {
        display: flex;
        gap: 5px;
    }
    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: none;
        padding: 6px;
        font-size: 1.1rem;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        transition: background 0.2s ease;
    }
    .action-btn.edit {
        color: #ffc107;
    }
    .action-btn.download {
        color: #28a745;
    }
    .action-btn.print {
        color: #17a2b8;
    }
    .action-btn.delete {
        color: #dc3545;
        background: none;
        border: none;
    }
    .action-btn:hover {
        background-color: rgba(0,0,0,0.05);
    }
    .note-content {
        font-size: 0.95rem;
        color: #555;
        overflow: hidden;
        max-height: 180px;
    }
</style>
@endsection

@push('scripts')
<script>
    function printNote(noteId) {
        const content = document.getElementById('note-content-' + noteId).innerHTML;
        const printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Print Note</title>');
        printWindow.document.write('<style>body{font-family:Arial;padding:20px;}h3{margin-bottom:20px;}</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write('<h3>Printed Note</h3>');
        printWindow.document.write(content);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>
@endpush
