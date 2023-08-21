<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Add a new book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 font-semibold text-xl text-gray-900 text-center">
                    {{ __("Enter the book details:") }}
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">Serial No.</th>
                            <th class="px-4 py-2 text-left">Book ID</th>
                            <th class="px-4 py-2 text-left">Book Name</th>
                            <th class="px-4 py-2 text-left">Author</th>
                            <th class="px-4 py-2 text-left">Borrow Date</th>
                            <th class="px-4 py-2 text-left">Return Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">101</td>
                            <td class="border px-4 py-2">Harry Potter 1</td>
                            <td class="border px-4 py-2">J.K. Rowling</td>
                            <td class="border px-4 py-2">2023-08-10</td>
                            <td class="border px-4 py-2">2023-08-24</td>
                        </tr>
                        <!-- Add more rows for additional books -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
