@extends('layouts.app')

@section('content')
    <!-- Motivational Quote Section -->
    <div class="bg-gray-200 p-4 rounded-lg shadow-md text-center mb-6">
        <h2 class="text-xl font-semibold text-gray-700">Motivational Quote of the Day</h2>
        <p class="text-lg italic text-gray-900">"{{ $quote['content'] }}"</p>
        <p class="text-gray-600">- {{ $quote['author'] }}</p>
    </div>

    <h1 class="text-2xl font-bold mb-4">Task List</h1>

    <a href="{{ route('tasks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">+ Add Task</a>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($tasks as $task)
            <div class="p-4 bg-white shadow-md rounded-lg border">
                <h2 class="text-lg font-bold">{{ $task->title }}</h2>
                <p class="text-gray-600">{{ $task->description }}</p>
                
                <div class="mt-4 flex justify-between items-center">
                    <a href="{{ route('tasks.edit', $task) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
