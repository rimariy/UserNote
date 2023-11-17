<!-- resources/views/notes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Note Details</h1>
        <div class="card">
            <div class="card-header">{{ $entity->title }}</div>
            <div class="card-body">
                <p class="card-text">{{ $entity->content }}</p>
                <a href="{{ route('notes.edit', $entity) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('notes.destroy', $entity) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
