<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    {{-- <h1>This is register page</h1>
    <form action="/register" method="POST">
        @csrf
        <div>
            <label for="name">name</label>
            <input required type="text" name="name" id="name" class="@error('name') merah @enderror" value="{{ old('name') }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">email</label>
            <input required type="email" name="email" id="email" class="@error('email') merah @enderror" value="{{ old('email') }}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="role">role</label>
            <input required type="text" name="role" id="role" class="@error('role') merah @enderror" value="{{ old('role') }}">
            @error('role')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input required type="password" name="password" id="password" class="@error('password') merah @enderror" />
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="rePassword">rePassword</label>
            <input required type="password" name="rePassword" id="rePassword" class="@error('rePassword') merah @enderror" />
            @error('rePassword')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>
    <a href="/login">already have an account, login</a> --}}
    <div class="flex items-center justify-center w-full h-screen">
        <div class="">
            @if(session()->has('registerError'))
            <p class="px-3 py-5 mb-2 text-2xl border rounded border-rose-500 bg-rose-200">{{ session('registerError') }}</p>
            @endif
            <form action="/register" method="POST" class="px-3 py-5 text-white bg-black rounded-md shadow-lg">
                @csrf
                <h1
                    class="pb-2 mb-10 text-5xl font-semibold tracking-wide text-center border-b-2 border-dashed font-bodoni">
                    Register</h1>
                <div class="grid grid-cols-1 py-2 border-b-2 md:grid-cols-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"
                        class="text-black px-2 py-1 border-l border-b @error('name') border border-rose-600 @enderror"
                        value="{{ old('name') }}" autofocus required>
                    @error('name')
                    <p class="mt-1 text-xs text-rose-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 py-2 border-b-2 md:grid-cols-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="text-black px-2 py-1 border-l border-b @error('email') border border-rose-600 @enderror"
                        value="{{ old('email') }}" required>
                    @error('email')
                    <p class="mt-1 text-xs text-rose-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 py-2 border-b-2 md:grid-cols-2">
                    <label for="password">Password</label>
                    <input required type="password" name="password" id="password"
                        class="text-black px-2 py-1 border-l border-b @error('password') border border-rose-600 @enderror" />
                    @error('password')
                    <p class="mt-1 text-xs text-rose-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 py-2 border-b-2 md:grid-cols-2">
                    <label for="rePassword">Re-Password</label>
                    <input required type="password" name="rePassword" id="rePassword"
                        class="text-black px-2 py-1 border-l border-b @error('rePassword') border border-rose-600 @enderror" />
                    @error('rePassword')
                    <p class="mt-1 text-xs text-rose-500">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full py-2 mt-4 text-xl text-black duration-100 bg-white rounded hover:scale-95 hover:bg-white/80 hover:text-black/80">Register</button>
            </form>
            <p class="mt-3 text-center">already have an account?, <a href="/login" class="underline">login</a></p>
    
        </div>
    </div>
</x-layout>