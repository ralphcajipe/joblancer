<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Jobs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/listings/{{ $listing->id }}"> {{ $listing->title }} </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/listings/{{ $listing->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>

                            <!-- Delete -->
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form method="POST" id="deleteForm{{ $listing->id }}"
                                    action="/listings/{{ $listing->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="text-red-500"
                                        onclick="confirmDelete({{ $listing->id }}, '{{ $listing->title }}')">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center">No Listings Found</p>
                        </td>
                    </tr>
                @endunless
            </tbody>
        </table>
        <!-- Delete button's JavaScript using SweetAlert2 -->
        <script>
            function confirmDelete(id, title) {
                Swal.fire({
                    title: 'Are you sure?',
                    html: "<b>Delete</b> " + title + "?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('deleteForm' + id).submit();
                    }
                })
            }
        </script>
    </x-card>
</x-layout>
