<?php

namespace App\Http\Controllers;

use App\Http\Requests\TahfidzHouseRequest;
use App\Models\TahfidzHouse;
use Illuminate\Http\Request;

class TahfidzHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahfidzHouses = TahfidzHouse::get();

        return view('pages.dashboard.house_tahfidz.index', \compact('tahfidzHouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('pages.dashboard.house_tahfidz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TahfidzHouseRequest $tahfidzHouseRequest)
    {
        TahfidzHouse::create($tahfidzHouseRequest->validated());
        return \to_route('tahfidzhouse.index')->with(['success' => 'Berhasil Menambahkan Rumah Tahfidz']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TahfidzHouse  $tahfidzHouse
     * @return \Illuminate\Http\Response
     */
    public function show(TahfidzHouse $tahfidzHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TahfidzHouse  $tahfidzHouse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahfidzHouse = TahfidzHouse::findOrFail($id);
        return \view('pages.dashboard.house_tahfidz.edit', \compact('tahfidzHouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TahfidzHouse  $tahfidzHouse
     * @return \Illuminate\Http\Response
     */
    public function update(TahfidzHouseRequest $request,  $id)
    {
        TahfidzHouse::findOrFail($id)->update($request->validated());

        return \to_route('tahfidzhouse.index')->with(['success' => 'Berhasil Update Rumah Tahfidz']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TahfidzHouse  $tahfidzHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        TahfidzHouse::findOrFail($id)->delete();
        return back()->with(['success' => 'Berhasil Hapus Rumah Tahfidz']);
    }
}
