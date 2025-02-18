@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Task</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <label class="block text-gray-700">Title:</label>
        <input type="text" name="title" value="{{ $task->title }}" required class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-400">

        <label class="block text-gray-700 mt-4">Description:</label>
        <textarea name="description" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ $task->description }}</textarea>

        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">Update Task</button>
    </form>
@endsection
