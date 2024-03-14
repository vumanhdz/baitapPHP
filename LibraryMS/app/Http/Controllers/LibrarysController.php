<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrowing;

class LibrarysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Borrowing::all();
        return view("index", compact("books"))->with("i");

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Borrowing::all();
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Borrowing::create($request->all());
        return redirect()->route("book.index")->with("mess","success");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrowing $book)
    {
        return view("view", compact("Book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrowing $book)
    {
        $book->update($request->all());
        return redirect()->route("book.index")->with("mess","success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrowing $book)
    {
        $book->delete();
        return redirect()->route("book.index")->with("mess","success");
    }
}
