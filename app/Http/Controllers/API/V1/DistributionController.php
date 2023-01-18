<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Distribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistributionController extends Controller
{
     public function index()
    {
      
        try {
            $distributions = Distribution::with(['tahfidzHouse', 'batch'])->get();

           if($distributions != null){
             return response()->json([
                'data' => $distributions
            ]);
           }else{
            return response()->json([
                'data' => []
            ], 404);
           }
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'something went wrong'
            ], 404);

        }
    }
}
