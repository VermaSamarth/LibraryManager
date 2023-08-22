<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Library Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 font-semibold text-xl text-gray-900 text-center">
                    {{ __("List of all the books") }}
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left">Serial No.</th>
                            <th class="px-4 py-2 text-left">Book Name</th>
                            <th class="px-4 py-2 text-left">Book Price</th>
                            <th class="px-4 py-2 text-left">Author</th>
                            <th class="px-4 py-2 text-left">Publications</th>
                            <th class="px-4 py-2 text-left">Available</th>
                            <th class="px-4 py-2 text-left">Total</th>
                            <th class="px-4 py-2 text-left">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td class="border px-4 py-2">{{$book->id}}</td>
                            <td class="border px-4 py-2">{{$book->name}}</td>
                            <td class="border px-4 py-2">{{$book->author}}</td>
                            <td class="border px-4 py-2">{{$book->price}}</td>
                            <td class="border px-4 py-2">{{$book->public}}</td>
                            <td class="border px-4 py-2">{{$book->available}}</td>
                            <td class="border px-4 py-2">{{$book->total}}</td>
                            <td class="border px-4 py-2" style="color: rgb(4, 125, 20);"><a href="/all_books/user/borrow/{{$book->id}}"><strong>Select</strong></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</x-app-layout>
