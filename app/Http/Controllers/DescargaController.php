<?php

namespace App\Http\Controllers;

use App\Models\Descarga;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DescargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descargas = Descarga::all();
        return view('descargas.index', compact('descargas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('descargas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $book = $request->all();
    //     $book['uuid'] = (string) Str::uuid();

    //     if($request->hasFile('book_image')){
    //         /**
    //          * 01 documentation way
    //         */
    //         $book['book_image'] = $request->file('book_image')->store('books');
    //         /**
    //          * 02 save just with the name
    //          */
    //         $book['book_image'] = $request->file('book_image')->getClientOriginalName();
    //         $request->file('book_image')->storeAs('folder_books', $book['book_image']);
    //         /**
    //          * 03 save with time ahead and original name
    //          */
    //         $book['book_image'] = time() . '_' . $request->file('book_image')->getClientOriginalName();
    //         $request->file('book_image')->storeAs('folder_books', $book['book_image']);
    //         /**
    //          * 04 save in a folder with the id of the user
    //          */
    //         $book['book_image'] = time() . '_' . $request->file('book_image')->getClientOriginalName();
    //         $request->file('book_image')
    //             ->storeAs('book_folder/' . auth()->id(), $book['book_image']);
    //     }

    //     Book::create($book);
    //     return redirect()->route('books.index');
    // }

    public function download($uuid)
    {
        $descarga = Descarga::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path("app/subfolder/$descarga->id/" . $descarga->descarga_image);
        return response()->download($pathToFile);
       // return response()->file($pathToFile);
    }

    /**
     * Store option number 5
     */
    public function store(Request $request)
    {
        $descarga = Descarga::create([
            'uuid' => (string) Str::orderedUuid(),
            'title' => $request->title,
        ]);
        if($request->hasFile('descarga_image'))
        {
            $image = $request->file('descarga_image')->getClientOriginalName();
            $request->file('descarga_image')
                ->storeAs('subfolder/' . $descarga->id, $image);
            $descarga->update(['descarga_image' => $image]);
        }
        return redirect()->route('descargas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function show(Descarga $descarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Descarga $descarga)
    {
        return view('descargas.edit', compact('descarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descarga $descarga)
    {
        $descarga->update($request->only(['uuid', 'title']));
        if($request->hasFile('descarga_image'))
        {
            $image = $request->file('descarga_image')->getClientOriginalName();
            $request->file('descarga_image')
                ->storeAs('subfolder/' . $descarga->id, $image);
            if($descarga->descarga_image != '')
            {
                unlink(storage_path('app/public/subfolder/' . $descarga->id . '/' . $descarga->descarga_image));
            }
            $descarga->update(['descarga_image' => $image]);
        }
        return redirect()->route('descargas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descarga $descarga)
    {
        //
    }
}
