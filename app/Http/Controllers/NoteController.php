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
        //Logic for creating a note
    }

    public function store(Request $request) {
        //Logic for storing a note
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
