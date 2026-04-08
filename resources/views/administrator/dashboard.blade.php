<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Fercho Sistemas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4">Welcome to the Dashboard</h1>
            <p class="text-gray-700 mb-6">You are logged in!</p>
            <a href="{{ route('logout') }}" class="text-blue-500 hover:underline">Logout</a>
        </div>
    </div>
    
    
</body>
</html>