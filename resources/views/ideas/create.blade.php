<x-layout>
    <form method="POST" action="/ideas">
        @csrf

        <div class="form-control">
            <label for="description" class="label">
                <span class="label-text font-semibold">Create New Idea</span>
            </label>

            <textarea
                id="description"
                name="description"
                rows="3"
                class="textarea textarea-bordered w-full"
            >{{ old('description') }}</textarea>

            <x-forms.error name="description" />

            <p class="mt-3 text-sm">
                Have an idea you want to save for later?
            </p>
        </div>

        <div class="mt-6">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </form>
</x-layout>