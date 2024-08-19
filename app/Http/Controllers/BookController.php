<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
     // getBooks buat tampilan isinya

    // buat tampilan form
    public function getCreatePage(){
        $categories = Category::all();

        return view('create', compact('categories'));
    }
    // buat function post book
    public function createBook(BookRequest $request){

        Book::create([
            'title'=> $request->title,
            'author'=> $request->author,
            'price'=> $request->price,
            'release'=> $request->release,
            'category_id' => $request->category_id,
        ]);

        return redirect(route('getBooks'));
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', compact('books'));
    }

    public function updateBook(Request $request, $id){

        $book = Book::find($id);

        $book->update([
            'title'=> $request->title,
            'author'=> $request->author,
            'price'=> $request->price,
            'release'=> $request->release,
            'category_id' => $request->category_id,
        ]);

        return redirect(route('getBooks'));
    }

    public function getBookById($id){
        $categories = Category::all();
        $book = Book::find($id);
        return view('update', compact('book', 'categories'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBooks'));
    }


}
