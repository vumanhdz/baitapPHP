<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\Region;

class FlowersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::all();
        return view("index", compact("flowers"))->with("i");    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flowers = Flower::all();
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Flower::create($request->all());
        return redirect()->route("flower.index")->with("ThongBao","Thêm sinh viên thành công");
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
    public function edit(Flower $flower)
    {
        return view("edit", compact("flower"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $flower->update($request->all());
        return redirect()->route("flower.index")->with("ThongBao","cap nhat thanh cong");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route("flower.index")->with("ThongBao","xoa thanh cong");
    }
}
