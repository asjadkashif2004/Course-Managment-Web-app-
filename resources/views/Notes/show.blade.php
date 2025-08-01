@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-card">
        <h2>{{ $note->title }}</h2>
        <p class="text-muted">{{ $note->created_at->format('d M, Y') }}</p>
        <hr>

        <div id="printArea">
            {!! $note->content !!}
        </div>

        <div class="mt-4">
            <a href="{{ route('notes.index') }}" class="btn btn-secondary">← Back to Notes</a>

            <a href="{{ route('notes.download', $note->id) }}" class="btn btn-success">
                <i class="fa fa-download"></i> Download
            </a>

            <button onclick="printNote()" class="btn btn-outline-primary">
                <i class="fa fa-print"></i> Print
            </button>
        </div>
    </div>
</div>

{{-- Clean Print Styling --}}
<style>
@media print {
    body * {
        visibility: hidden;
    }

    #printArea, #printArea * {
        visibility: visible;
    }

    #printArea {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        padding: 20px;
    }
}
</style>

{{-- Optional Form Card Styling --}}
<style>
    .form-card {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-card h2 {
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 6px;
        border: 1px solid #ced4da;
    }
</style>

{{-- Print Script --}}
<script>
    function printNote() {
        window.print();
    }
</script>
@endsection
