<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>
<body>
    <nav>
        <a href="{{ route('tasks.index') }}">Home</a>
        <a href="{{ route('tasks.create') }}">Create Task</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
