<?php

namespace App\Http\Controllers;

use App\Models\Distribution;
use App\Models\TahfidzHouse;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countTahfidzHouses = TahfidzHouse::count();
        $countDistributions = Distribution::count();
        $countAdminUser = User::where('roles', 'ADMIN')->count();
        return view('pages.dashboard.dashboard', \compact('countTahfidzHouses', 'countAdminUser', 'countDistributions'));
    }
}
