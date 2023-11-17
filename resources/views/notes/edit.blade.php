<!-- resources/views/notes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Note</h1>
        <form action="{{ route('notes.update', $entity) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $entity->title }}" required>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$entity->user_id}}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content">{{ $entity->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
