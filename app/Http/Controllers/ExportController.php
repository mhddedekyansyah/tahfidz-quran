<?php

namespace App\Http\Controllers;
use App\Exports\DistributionExport;
use Maatwebsite\Excel\Facades\Excel;
class ExportController extends Controller
{
    public function export() 
    {
   
        return Excel::download(new DistributionExport, 'penyaluran-beras.xlsx');
    }
}
