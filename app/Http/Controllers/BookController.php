<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=\App\Book::all();
        return view('index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->books_title = $request->get('books_title');
        $book->books_writer = $request->get('books_writer'); 
        $book->books_description = $request->get('books_description');
        $book->books_genre = $request->get('books_genre');
        $book->books_language = $request->get('books_language');
        $book->books_country = $request->get('books_country');
        $book->books_publisher = $request->get('books_publisher');
        $book->books_price = $request->get('books_price');
        $book->books_qty = $request->get('books_qty');
        $books_filepath = $request->file('books_filepath');
        $ext = $books_filepath->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $books_filepath->move('uploads/file',$newName);
        $book->books_filepath = $newName;
        $book->save();
        
        return redirect('books/create')->with('success', 'Data buku telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($books_id)
    {
        $books = Book::where('books_id', $books_id)->get();
        return view('edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $books_id)
    {
        $book = Book::where('books_id', $books_id)->first();
        $book->books_title = $request->books_title;
        $book->books_writer = $request->books_writer; 
        $book->books_description = $request->books_description;
        $book->books_genre = $request->books_genre;
        $book->books_language = $request->books_language;
        $book->books_country = $request->books_country;
        $book->books_publisher = $request->books_publisher;
        $book->books_price = $request->books_price;
        $book->books_qty = $request->books_qty;
        if (empty($request->file('books_filepath'))){
            $book->books_filepath = $book->books_filepath;
        }
        else{
            unlink('uploads/file/'.$book->books_filepath); //menghapus file lama
            $books_filepath = $request->file('books_filepath');
            $ext = $books_filepath->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $books_filepath->move('uploads/file',$newName);
            $book->books_filepath = $newName;
        }
        $book->save();
        return redirect()->route('books.index')->with('alert-success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($books_id)
    {
        //
        $book = Book::where('books_id', $books_id)->first();
        $book->delete();
        return redirect()->route('books.index');
    }
}
