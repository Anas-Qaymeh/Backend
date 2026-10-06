<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request){
return Book::query()->create([

'title'=>$request->title,
'author'=>$request->author,
'publication_year'=>$request->publication_year,


]);
    }

public function show($id)
{
    return Book::where('id', $id)->first();
}



public function index(){
    $book= Book::query()->get();
    return $book;
}

public function update(Request $request, $id)
{
    $book = Book::query()-> where('id',$id)->first();

    $request->validate([
        'publication_year'=>['required','date','digits:4']
    ]);
    $book->update([
        'title'  => $request->title,
        'author' => $request->author,
        'publication_year'=>$request->publication_year
    ]);

    return 'ok';
}

public function destroy($id){

    $book = Book::query()-> where('id',$id)->get();

    $book->delete();
}
}
