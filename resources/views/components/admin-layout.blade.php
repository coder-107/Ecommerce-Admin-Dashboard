<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>
<body>

    {{-- Sidebar or header can go here --}}
    <header>
        <h1>Admin Panel</h1>
    </header>

    <main class="p-4">
        {{ $slot }}
    </main>

    <script src="{{ asset('admin/js/script.js') }}"></script>
</body>
</html>
