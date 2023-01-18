<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\TahfidzHouse;
use Illuminate\Http\Request;

class TahfidzHouseController extends Controller
{
    public function index()
    {
        try {
            $tahfidzHouses = TahfidzHouse::all();
            if($tahfidzHouses != null){
                return response()->json([
                    'data' => $tahfidzHouses
                ]);
            }
            return response()->json([
                    'data' => []
                ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'something went wrong'
            ], 404);
        }
    }
}
