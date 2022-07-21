<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaApbdesController extends Controller
{
    public function kelolaApbdes()
    {
        return view("dashboard.kelola-apbdes");
    }
}
