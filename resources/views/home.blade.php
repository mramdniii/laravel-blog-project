<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome to home page!</h3>

    <div class="h-[60vh] flex items-center justify-center">
        <a href="/data"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">New
            Blog</a>
    </div>
</x-Layout>
