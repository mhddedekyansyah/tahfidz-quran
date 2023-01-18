<?php

namespace App\Http\Controllers;

use App\Http\Requests\DistributionRequest;
use App\Http\Requests\EditDistributionRequest;
use App\Models\Batch;
use App\Models\Distribution;
use App\Models\TahfidzHouse;
use Illuminate\Http\Request;
use App\Exports\DistributionExport;
use Maatwebsite\Excel\Facades\Excel;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $distributions = Distribution::with(['tahfidzHouse', 'batch'])->get();
        return \view('pages.dashboard.distribution.index', compact('distributions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batchs = Batch::all();
        $tahfidzHouses = TahfidzHouse::all();
        return \view('pages.dashboard.distribution.create', \compact('batchs', 'tahfidzHouses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistributionRequest $request)
    {
        $path = 'upload/images/';
        if($request->file('image_url')){
            $file = $request->file('image_url');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path($path), $filename);

            Distribution::create([
                'batch_id' => $request->batch_id,
                'tahfidz_house_id' => $request->tahfidz_house_id,
                'total_rice' => $request->total_rice,
                'image_url' => $path . $filename
            ]);

            return \to_route('distribution.index')->with(['success' => 'Berhasil Menambahkan Penyaluran']);
        }
        
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
        $distribution = Distribution::findOrFail($id);
        $batchs = Batch::all();
        $tahfidzHouses = TahfidzHouse::all();
        return view('pages.dashboard.distribution.edit', \compact('distribution', 'batchs', 'tahfidzHouses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( EditDistributionRequest $request, $id)
    {
       
        $path = 'upload/images/';
        if($request->file('image_url')){
            $file = $request->file('image_url');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path($path), $filename);

             Distribution::findOrFail($id)->update([
                'batch_id' => $request->batch_id,
                'tahfidz_house_id' => $request->tahfidz_house_id,
                'total_rice' => $request->total_rice,
                'image_url' => $path . $filename
            ]);
            return to_route('distribution.index')->with(['success' => 'Berhasil Mengupdate Penyaluran']);
        }else{
            Distribution::findOrFail($id)->update([
                'batch_id' => $request->batch_id,
                'tahfidz_house_id' => $request->tahfidz_house_id,
                'total_rice' => $request->total_rice,
            ]);
            return to_route('distribution.index')->with(['success' => 'Berhasil Mengupdate Penyaluran']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Distribution::findOrFail($id)->delete();
        return back()->with(['success' => 'Berhasil Hapus Penyaluran']);
    }

}
