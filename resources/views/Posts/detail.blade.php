<x-layout>
    <x-slot:title>
        Detail Post
    </x-slot>

    <x-navbar/>

    <div class="flex justify-center my-10">
        <div class="flex flex-col justify-center w-2/3 text-center">
            <div class="flex items-center justify-between my-4">
                <a href="/"
                    class="block mt-5 text-2xl font-semibold text-center duration-100 border-b-2 border-black hover:translate-x-2 w-fit">Newest
                    Article</a>
                <a href="/allPost"
                    class="block mt-5 text-2xl font-semibold text-center duration-100 border-b-2 border-black hover:translate-x-2 w-fit">All
                    Article</a>
                {{-- <h1 class="block mt-5 text-3xl font-semibold text-center">Detail Article</h1> --}}
            </div>
            <h1 class="my-4 text-xl">{{ $post->title }}</h1>
            <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://placehold.co/700x400'}}" alt="" class="pb-5 border-b-4 border-black">
            <div class="py-3 mb-5 text-start">
                <h1 class="">Writter <a href="/postsBy/{{ $post->user->id }}" class="underline">{{ $post->user->name }}</a></h1>
                <p class="text-xs font-light">{{ $post->created_at->diffForHumans() }}</p>
                <div class="mt-3" id="editor-container">
                    {{-- {!! $post->content !!} --}}
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
    <script>
        const quill = new Quill('#editor-container', {
        theme: 'snow',
        readOnly: true,
        modules: {
        toolbar: false // Tidak menambahkan toolbar
        }
        })
        quill.root.innerHTML = `{!! $post->content !!}`
    </script>
</x-layout>