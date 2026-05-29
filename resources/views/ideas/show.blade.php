<x-layout>
    <h1 class="text-xl font-bold text-white mb-6">
        Your Idea
    </h1>

    <p class="text-white font-bold mb-6">
        {{ $idea->description }}
    </p>

    <a
        href="/ideas/{{ $idea->id }}/edit"
        class="inline-block rounded-md bg-indigo-500 px-4 py-2 text-sm font-semibold text-white"
    >
        Edit
    </a>
</x-layout>