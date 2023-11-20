<?php

namespace App\Policies\Note;

use App\Models\Note\note;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class NotePolicy
{
    use HandlesAuthorization;


    // Any method here that match the controller method name will be automatically called.
    public function index() {
        if (Auth::id() == null) {
            return false;
        }
        return true;
    }

    public function store() {
        if (Auth::id() == null) {
            return false;
        }
        return true;
    }

    public function show() {
        $id=request()->route()->parameter('id');
        $note=Note::find($id);
        if ($note->user_id !== Auth::id()) {
            return false;
        }
        return true;
    }

    public function update() {
        $id=request()->route()->parameter('id');
        $note=Note::find($id);
        if ($note->user_id !== Auth::id()) {
            return false;
        }
        return true;
    }
    public function edit() {
        $id=request()->route()->parameter('id');
        $note=Note::find($id);
        if ($note->user_id !== Auth::id()) {
            return false;
        }
        return true;
    }

    public function destroy() {
        $id=request()->route()->parameter('id');
        $note=Note::find($id);
        if ($note->user_id !== Auth::id()) {
            return false;
        }
        return true;
    }}
