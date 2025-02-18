<x-layouts.admin>
    <header>
        <h1 class="text-lg font-semibold leading-6 text-gray-600 mb-2 uppercase text-center mt-10">Post Managment</h1>
    </header>
    <div class="px-4 py-4 sm:px-6 lg:px-8">
        <div class="px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto mt-10">
            <div class="flow-root">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 text-sm sm:pl-0">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a href="{{ route("show", ["post" => $post->slug]) }}" target="_blank">
                                                        {{ $post->title }}
                                                    </a>
                                                </div>
                                                <p class="ml-20">{{ $post->excerpt }}</p>
                                            </div>
                                        </td>
                                        @if ($post->published_at)
                                            <td class="whitespace-nowrap px-3 py-4">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                                            </td>
                                        @else
                                            <td class="whitespace-nowrap px-3 py-4">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Draft</span>
                                            </td>
                                        @endif
                                        <td
                                            class="whitespace-nowrap px-3 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-0">
                                            {{-- {{ route('admin.post.publish', ['post' => $post->slug]) }} --}}
                                            <form method="POST"
                                                action="#">
                                                @csrf
                                                @method('PATCH')
                                                <button class="text-sm text-gray-400">Publish</button>
                                            </form>
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Admin</td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                            {{-- {{ route('admin.posts.edit', ['post' => $post->slug]) }} --}}
                                            <a href="#"
                                                class="text-blue-500 hover:text-indigo-900">
                                                Edit
                                            </a>
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                            <form method="POST"
                                                action="{{ route('admin.posts.delete', $post->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-sm text-gray-400">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto">
            {{ $posts->links() }}
        </div>
    </div>
</x-layouts.admin>