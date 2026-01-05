<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index() {
        //Logic for fetching all notes
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
