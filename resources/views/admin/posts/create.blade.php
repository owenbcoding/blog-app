<x-layout.admin> 
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <header>
            <div class="px-4 py-4 sm:px-6 lg:px-8">
                <h1 class="text-lg font-semibold leading-6 text-gray-600 mb-2 uppercase text-center">Create Post</h1>
            </div>
        </header>
        <div class="px-8 mx-w-4xl mx-auto mt-10">
            <form method="POST" action="" enctype="multipart/form-data">
                <x-form.input name="title" label="Title" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.input name="tags" label="Tags" />
                <x-form.input name="excerpt" label="Excerpt" />
                <x-form.textarea name="body" label="Body" />
            </form>
        </div>
    </div>
</x-layout.admin>