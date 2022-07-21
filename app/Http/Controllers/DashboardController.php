<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function beranda()
    {
        return view("dashboard.beranda");
    }
}
