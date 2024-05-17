<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $comics = Comics::all();
        return view('comics.index', compact('comics')); // [ 'comics' => $comics ]
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        // validate the user inputs

        // create the resource
        // option 1 (extended operations)
        $comics = new Comics();
        $comics->title = $data['title'];
        $comics->thumb = $data['thumb'];
        $comics->description = $data['description'];
        $comics->type = $data['type'];
        $comics->series = $data['series'];
        $comics->sale_date = $data['sale_date'];
        $comics->price = str_replace('$', '', $data['price']);
        $comics->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comics $comics)
    {
        // $comics = Comics::all();

        return view('comics.show', compact('comics')); // [ 'comics' => $comics ]

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comics)
    {
        //
    }
}
