<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function getCart(){
        $books = Book::all();

        $userID = Auth::user()->id;
        $carts = Cart::where('user_id', $userID)->get();

        return view('cart', compact('books', 'carts'));
    }

    public function cartStore(Request $request){
        Cart::create([
            'quantity' => $request->quantity,
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
        ]);
        return redirect(route('getCart'));
    }
}
