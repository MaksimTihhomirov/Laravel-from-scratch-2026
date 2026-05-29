<x-layout>
    <form method="POST" action="/ideas">
        @csrf

        <div>
            <label for="idea" class="block text-sm font-medium text-white">
                New Idea
            </label>

            <div class="mt-2">
                <textarea
                    id="idea"
                    name="idea"
                    rows="3"
                    class="block w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10"
                ></textarea>
            </div>

            <p class="mt-3 text-sm text-gray-400">
                Have an idea you want to save for later?
            </p>
        </div>

        <div class="mt-6">
            <button
                type="submit"
                class="rounded-md bg-indigo-500 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-400"
            >
                Save
            </button>
        </div>
    </form>

    @if ($ideas->count())
        <section class="mt-10">
            <h2 class="text-lg font-bold text-white">
                Your Ideas
            </h2>

            <ul class="mt-4 space-y-2">
                @foreach ($ideas as $idea)
                    <li class="text-white">
                        {{ $idea->description }}
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
</x-layout>