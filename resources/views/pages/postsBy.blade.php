<x-layout>
    <x-slot:title>
        All by {{ $posts ? $posts[0]->user->name : '' }}
        </x-slot>

        <x-navbar />

        <div class="px-5 mt-5 mb-10">
            <div class="flex items-center justify-between">
                <h1 class="block mt-5 text-3xl font-semibold text-center">All Article By {{ $posts ? $posts[0]->user->name : '' }}</h1>
                <a href="/allPost"
                    class="block mt-5 text-2xl font-semibold text-center duration-100 border-b-2 border-black hover:translate-x-2 w-fit">All
                    Article</a>
            </div>
            @if($posts->isEmpty())
            <h1 class="py-2 text-center">No Post Created yet</h1>
            @else
            <div class="grid grid-cols-1 gap-2 mt-3 md:gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($posts as $p)
                <a href="/posts/{{ $p->id }}"
                    class="flex flex-col items-center justify-center p-2 duration-100 border-b-2 border-r-2 hover:scale-105 hover:shadow-md">
                    <img src="{{ $p->image ? asset('storage/' . $p->image) : 'https://placehold.co/200x200' }}" alt=""
                        class="object-cover text-center w-52 h-52">
                    <p class="pt-2 text-center line-clamp-3">{{ $p->title }}</p>
                    <small class="w-full text-end font-extralight">{{ $p->created_at->diffForHumans() }}</small>
                </a>
                @endforeach
            </div>
            <div class="flex justify-center p-2 mt-4 bg-black">
                {{ $posts->links() }}
            </div>
            @endif
        </div>

        <x-footer />
</x-layout>