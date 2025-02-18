<x-layouts.admin>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <header>
            <div class="px-4 py-4 sm:px-6 lg:px-8">
                <h1 class="text-lg font-semibold leading-6 text-gray-600 mb-2 uppercase text-center">Create Post</h1>
            </div>
        </header>
        <div class="px-8 mx-w-4xl mx-auto mt-10">
            <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                @csrf
                <label>Title</label>
                <x-form.input name="title" />
                <label>Image</label>
                <x-form.input name="thumbnail" type="file" />
                <label>Tag</label>
                <x-form.input label="Tags (comma separated)" placeholder="news, politics, education" name="tag" />
                <label>Excerpt</label>
                <x-form.input name="excerpt" />
                <label>Body</label>
                <x-form.textarea name="body" />
                <x-form.button type="submit">Create Blog</x-form.button>
            </form>
        </div>
    </div>
</x-layouts.admin>
