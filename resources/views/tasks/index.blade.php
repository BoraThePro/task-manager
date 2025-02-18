@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    <a href="{{ route('tasks.create') }}">Create New Task</a>

    @foreach ($tasks as $task)
        <div>
            <strong>{{ $task->title }}</strong>
            <p>{{ $task->description }}</p>

            <a href="{{ route('tasks.edit', $task) }}">Edit</a>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <hr>
    @endforeach
@endsection
