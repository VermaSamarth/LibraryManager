<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowBooks extends Controller
{
    public function details(){
        $user=Auth::user();
        //$user=User::find($id);
        $borrows=$user->user_borrow;
        //dd($user);
        return view('borrowedbooks',['borrow'=>$borrows]);
    }
}
