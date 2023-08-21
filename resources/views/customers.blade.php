<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('List of all the customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <table class="border-collapse border" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="border p-2">Serial No.</th>
                            <th class="border p-2">Name</th>
                            <th class="border p-2">Email</th>
                            <th class="border p-2">Borrowed Books</th>
                            <th class="border p-2">More Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="border p-2">{{$loop->index+1}}</td>
                            <td class="border p-2">{{$user->name}}</td>
                            <td class="border p-2">{{$user->email}}</td>
                            <td class="border p-2">
                                <ul>
                                    @foreach ($user->user_borrow as $item)
                                        <li>{{$item->book_details->name}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="border p-2">
                                <a href="/admin/customers/moredetails/{{$user->id}}" class="text-center">View All</a>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
                
                
            </div>
        </div>
    </div>
</x-app-layout>
