<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Edit the Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 font-semibold text-xl text-gray-900 text-center">
                    {{ __("Update the book details:") }}
                </div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <form action="/all_books/update/{{$book->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="book_id"><strong>Book ID:</strong></label>
                        <input type="text" id="id" name="id" required placeholder="Enter the Book Id" value="{{old('id',$book->id)}}"><br><br>
                        
                        <label for="book_name"><strong>Book Name:</strong></label>
                        <input type="text" id="name" name="name" required placeholder="Enter the Book Name" value="{{old('name',$book->name)}}"><br><br>
                        
                        <label for="author"><strong>Author:</strong></label>
                        <input type="text" id="author" name="author" required placeholder="Enter the Author name" value="{{old('author',$book->author)}}"><br><br>
                        
                        <label for="publication"><strong>Publication:</strong></label>
                        <input type="text" id="public" name="public" required placeholder="Publication name" value="{{old('public',$book->public)}}"><br><br>
                        
                        <label for="price"><strong>Price:</strong></label>
                        <input type="number" id="price" name="price" step="0.01" min="0" required placeholder="Enter the Book Price" value="{{old('price',$book->price)}}"><br><br>
                        
                        <label for="available"><strong>Available:</strong></label>
                        <input type="number" id="available" name="available" min="0" required placeholder="No of books available" value="{{old('available',$book->available)}}"><br><br>
                        
                        <label for="total"><strong>Total:</strong></label>
                        <input type="number" id="total" name="total" min="0" required placeholder="Total no of books" value="{{old('total',$book->total)}}"><br><br>
                        
                        <button type="submit"><strong>Submit</strong></button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
