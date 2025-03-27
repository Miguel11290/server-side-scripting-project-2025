<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Education App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="mb-4">Welcome to the Education App</h1>
        <p class="lead">Manage students and colleges with ease.</p>
        <div class="mt-4">
            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg me-3">View All Students</a>
            <a href="{{ route('colleges.index') }}" class="btn btn-secondary btn-lg">View All Colleges</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>