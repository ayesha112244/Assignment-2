<x-layout>
    <div class="min-h-[70vh] flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
                Sign In
            </h2>

            {{-- Flash message for failed login --}}
            @if(session('login_error'))
                <div class="mb-4 rounded-md bg-red-100 border border-red-300 text-red-700 px-4 py-3 text-sm">
                    {{ session('login_error') }}
                </div>
            @endif

            <form method="POST" action="{{ url('/login') }}" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block font-semibold text-gray-700 mb-1">
                        Email
                    </label>
                    <input
                        type="text"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full rounded-md border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block font-semibold text-gray-700 mb-1">
                        Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        class="w-full rounded-md border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full bg-green-600 text-white py-2 rounded-md font-semibold hover:bg-green-700 transition">
                    Sign In
                </button>
            </form>

        </div>
    </div>
</x-layout>
