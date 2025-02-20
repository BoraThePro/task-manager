@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <label class="block text-gray-700">Title:</label>
        <input type="text" name="title" required class="w-full border rounded-lg px-3 py-2 mt-2 mb-4">

        <label class="block text-gray-700">Description:</label>
        <textarea name="description" class="w-full border rounded-lg px-3 py-2 mt-2 mb-4"></textarea>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Save Task</button>
    </form>
@endsection
