<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TripNest</title>

    <!-- Tailwind via Vite -->
    @vite('resources/js/app.js')
</head>

<body class="min-h-screen bg-slate-100 text-gray-800">

    {{-- Auth bar --}}
    @auth
        <div class="bg-green-50 border-b border-green-100 text-right px-4 py-2 text-sm">
            Logged in as
            <span class="font-semibold">{{ Auth::user()->name }}</span>

            <form method="POST" action="/logout" class="inline-block ml-4">
                @csrf
                <button
                    class="bg-red-500 text-white px-3 py-1 rounded-md text-sm hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>
    @endauth

    {{-- Navbar --}}
    @if (!Request::is('login'))
        <div class="relative z-50">
            <x-navbar />
        </div>
    @endif

    {{-- Main content --}}
    <main class="max-w-7xl mx-auto px-4 py-8">
        {{ $slot }}
    </main>

</body>
</html>
