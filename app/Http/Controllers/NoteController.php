<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Admin can see all notes; students only see their own
        $notes = $user->role === 'admin'
            ? Note::latest()->get()
            : Note::where('user_id', $user->id)->latest()->get();

        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Note::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note created successfully!');
    }

    public function show(Note $note)
    {
        $this->authorizeAccess($note);
        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {
        $this->authorizeAccess($note);
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $this->authorizeAccess($note);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $note->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
    }

    public function destroy(Note $note)
    {
        $this->authorizeAccess($note);
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
    }

    public function download($id)
    {
      $note = Note::findOrFail($id);
    $pdf = Pdf::loadView('notes.pdf', compact('note'));
    return $pdf->download($note->title . '.pdf');  
    }

    private function authorizeAccess(Note $note)
    {
        $user = Auth::user();
        if ($user->role !== 'admin' && $note->user_id !== $user->id) {
            abort(403, 'Unauthorized access');
        }
    }
}
