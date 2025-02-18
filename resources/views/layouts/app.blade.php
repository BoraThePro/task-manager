<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-lg font-bold">Task Manager</h1>
            <div>
                <a href="{{ route('tasks.index') }}" class="px-4 hover:text-gray-200">Home</a>
                <a href="{{ route('tasks.create') }}" class="px-4 hover:text-gray-200">Create Task</a>
            </div>
        </div>
    </nav>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif


    <!-- Main Content -->
    <main class="container mx-auto mt-6 p-6 bg-white shadow-lg rounded-lg">
        @yield('content')
    </main>

</body>
</html>
