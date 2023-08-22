<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function add_book(){
        return view('addbook');
    }

    public function store(Request $request){
        $book=new Book;
        //dd($request->author);
        $book->id=$request->id;
        $book->name=$request->name;
        $book->author=$request->author;
        $book->price=$request->price;
        $book->public=$request->public;
        $book->available=$request->available;
        $book->total=$request->total;

        $book->save();
        return view('allbooks',['books'=>Book::get()]);
    }

    public function display(){
        return view('allbooks',['books'=>Book::get()]);
    }

    public function show_customers(){
        $users = User::where('is_admin', 0)->get();
        return view('customers',['users'=> $users]);
    }

    public function moredetails($id){
        $user=User::find($id);
        return view('more_details',['users'=>$user]);
    }

    public function edit($id){
        $book=Book::find($id);
        //dd($book);
        return view('editbook',['book'=>$book]);
    }

    public function update(Request $request){
        $book=Book::find($request->id);
        $book->id=$request->id;
        $book->name=$request->name;
        $book->author=$request->author;
        $book->price=$request->price;
        $book->public=$request->public;
        $book->available=$request->available;
        $book->total=$request->total;
        $book->save();
        return view('allbooks',['books'=>Book::get()]);
    }

    public function update_borrow(Request $request){
        $borrow=new Borrow;
        $book=Book::find($request->id);
        
        if ($book->available>0) {
            $num=$book->available;
            // dd($num);
            $borrow->user_id=Auth::user()->id;
            $borrow->book_id=$book->id;
            $borrow->borrow_date=now()->format('Y-m-d H:i:s');

            $dateAfterTwoWeeks = now()->addDays(14);
            $formattedDate = $dateAfterTwoWeeks->format('Y-m-d');
            $borrow->return_date=$formattedDate;
            $book->available=$request->available;
            $book->available=$num-1;
            // dd($book->available);
            $borrow->save();
            $book->save();

            $user=Auth::user();
            $borrows=$user->user_borrow;
            return view('borrowedbooks',['borrow'=>$borrows]);
        }
        abort(404, 'Cannot Borrow the books!!!!');  
    }

    public function print(){
        return view('user_allbooks',['books'=>Book::get()]);
    }
}
