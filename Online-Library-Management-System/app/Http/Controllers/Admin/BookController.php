<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use App\Models\Book;
use App\Models\Category;
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
        $data['book_list'] = Book::get();
        // dd(Book::all());
        return view('admin.books.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category_list'] = Category::get();
        $data['author_list'] = Authors::get();
        return view('admin.books.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->BookName = $request->name;
        $book->Category_id = $request->Category_Id;

        $book->Author_id = $request->Author_Id;
        $book->Price = $request->price;
        $book->ISBNumber = $request->number;
        $book->BookImage = $request->picture;
        // dd( $book);
        $book->save();
        return redirect('/admin/books');
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
    public function edit($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return redirect('admin/books');
        }
        $data["book"] = $book;
        //dd(  $data["book"]);
        return view('admin.books.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return redirect('admin/books');
        }
        $book->BookName = $request->name;
        $book->Category_id = $request->Category_Id;
        //dd($request->Category_Id);
        $book->Author_id = $request->Author_Id;
        $book->Price = $request->price;
        $book->ISBNumber = $request->number;
        $book->BookImage = $request->picture;

        $book->save();
        return redirect('/admin/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
