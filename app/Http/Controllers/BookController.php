<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
        return back();
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
}
