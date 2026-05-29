<x-layout>
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')

        <div class="form-control">
            <label for="description" class="label">
                <span class="label-text font-semibold">Edit Your Idea</span>
            </label>

            <textarea
                id="description"
                name="description"
                rows="3"
                class="textarea textarea-bordered w-full"
            >{{ old('description', $idea->description) }}</textarea>

            <x-forms.error name="description" />
        </div>

        <div class="mt-6 flex items-center gap-x-2">
            <button type="submit" class="btn btn-primary">
                Update
            </button>

            <button
                type="submit"
                form="delete-idea-form"
                class="btn btn-neutral"
            >
                Delete
            </button>
        </div>
    </form>

    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
