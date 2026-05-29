<x-layout>
    <h1 class="text-xl font-bold text-white mb-6">
        Edit Your Idea
    </h1>

    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')

        <div>
            <label for="description" class="block text-sm font-medium text-white">
                Edit Your Idea
            </label>

            <div class="mt-2">
                <textarea
                    id="description"
                    name="description"
                    rows="3"
                    class="block w-full rounded-md bg-white/5 px-3 py-2 text-white outline outline-1 outline-white/10"
                >{{ $idea->description }}</textarea>
            </div>
        </div>

        <div class="mt-6 flex gap-x-2">
            <button
                type="submit"
                class="rounded-md bg-indigo-500 px-4 py-2 text-sm font-semibold text-white"
            >
                Update
            </button>
        </div>
    </form>

    <form method="POST" action="/ideas/{{ $idea->id }}" class="mt-4">
        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="rounded-md bg-red-500 px-4 py-2 text-sm font-semibold text-white"
        >
            Delete
        </button>
    </form>
</x-layout>