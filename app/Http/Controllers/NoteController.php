<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index() {
        $notes = Note::latest()->get();
        return view('notes.index', compact('notes'));
    }

    public function show(Note $note) {
        //Logic for return a single note
    }

    public function create() {
        return view('notes.create');
    }

    public function store(Request $request) {
        $validated  = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:3',
        ]);

        $request->user()->notes()->create($validated);

        return redirect()->route('notes.index')->with('success', 'Note created successfully');
    }

    public function edit(Note $note) {
        //Logic for editing a note
    }

    public function update(Request $request, Note $note) {
        //Logic for updating a note
    }

    public function delete(Note $note) {
        //Logic for deleting a note
    }
}
