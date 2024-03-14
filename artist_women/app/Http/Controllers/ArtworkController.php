<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::all();
        return view("index", compact("artworks"))->with("i");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artworks = Artwork::all();
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Artwork::create($request->all());
        return redirect()->route("artist.index")->with("ThongBao","Thêm sinh viên thành công");
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
    public function edit(Artwork $artwork)
    {
        return view("edit", compact("artwork"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artworks = Artwork::all();
        return redirect()->route("artist.index")->with("ThongBao","cap nhat thanh cong");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artworks)
    {
        $artworks->delete();
        return redirect()->route("artist.index")->with("ThongBao","xoa thanh cong");
    }
}
