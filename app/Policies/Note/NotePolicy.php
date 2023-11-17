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
    public function store() {
        return true;
    }

    public function index() {
        return true;
    }

    public function show() {
        return true;
    }

    public function update() {
        $id=request()->route()->parameter('id');
        $note=Note::find($id);
        if ($note->user_id !== Auth::id()) {
            abort(403);
        }
        return true;
    }
    public function edit() {
        $id=request()->route()->parameter('id');
        $note=Note::find($id);
        if ($note->user_id !== Auth::id()) {
            abort(403);
        }
        return true;
    }

    public function destroy() {
        return true;
    }}
