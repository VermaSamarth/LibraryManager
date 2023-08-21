<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Added the book!!!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 font-semibold text-xl text-green-900 text-center">
                    {{ __("Borrow Details of the selected user :") }}
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
                        @foreach ($users->user_borrow as $user)
                            <tr>
                                <td class="border px-4 py-2">{{$loop->index+1}}</td>
                                <td class="border px-4 py-2">{{$user->book_details->id}}</td>
                                <td class="border px-4 py-2">{{$user->book_details->name}}</td>
                                <td class="border px-4 py-2">{{$user->book_details->author}}</td>
                                <td class="border px-4 py-2">{{$user->borrow_date}}</td>
                                <td class="border px-4 py-2">{{$user->return_date}}</td>
                            </tr>
                        @endforeach
                            <!-- Add more rows for additional books -->
                        </tbody>
            </div>
        </div>
    </div>
</x-app-layout>
