<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Borrowed Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 font-semibold text-xl text-gray-900 text-center">
                    {{ __("Your borrowed book details:") }}
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">Book ID</th>
                            <th class="px-4 py-2 text-left">Book Name</th>
                            <th class="px-4 py-2 text-left">Author</th>
                            <th class="px-4 py-2 text-left">Borrow Date</th>
                            <th class="px-4 py-2 text-left">Return Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($borrow as $borrow)
                            <tr>
                                <td class="border px-4 py-2">{{$borrow->id}}</td>
                                <td class="border px-4 py-2">{{$borrow->book_details->name}}</td>
                                <td class="border px-4 py-2">{{$borrow->book_details->author}}</td>
                                <td class="border px-4 py-2">{{$borrow->borrow_date}}</td>
                                <td class="border px-4 py-2">{{$borrow->return_date}}</td>
                            </tr>
                        @endforeach                        
                        <!-- Add more rows for additional books -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
