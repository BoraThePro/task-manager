@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf

        <label class="block text-gray-700">Title:</label>
        <input type="text" name="title" required class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-400">

        <label class="block text-gray-700 mt-4">Description:</label>
        <textarea name="description" class="w-full border border-gray-300 rounded-lg px-3 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>

        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">Save Task</button>
    </form>
@endsection
