<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowBooks extends Controller
{
    public function details(){
        $bookdetails=Borrow::find(3);
        $count=0;
        dd($bookdetails);
        $user=User::find(3);
        $borrows=$user->user_borrow;
        //dd($borrows[0]->book_details->name);
        foreach($borrows as $borrow){
            $count++;
            //echo $borrow->book_details->name;
        }
        return view('borrowedbooks','count');
    }
}
