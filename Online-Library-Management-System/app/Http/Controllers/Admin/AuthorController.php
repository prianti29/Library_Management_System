<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PharIo\Manifest\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['author_list'] = Authors::get();
        return view('admin.author.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Authors();
        $author->AuthorName=$request->name;
        $author->save();
        return redirect('/admin/author');
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
        $author = Authors::find($id);
        if(!$author){
            return redirect('admin/author');
        }
        $data["author"]=$author;
        return view('admin.author.edit',$data);
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
        $author= Authors::find($id);
        if(!$author){
            return redirect('/admin/author');
        }
        $author->AuthorName=$request->name;
        $author->name;
        $author->save();
        return redirect('/admin/author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author= Authors::find($id);
        if(!$author){
            return redirect('/admin/author');
        }
        $author->delete();
        return redirect('/admin/author');
    }
}
