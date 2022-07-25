<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaLayananController extends Controller
{
    public function kelolaLayanan()
    {
        return view("dashboard.kelola-layanan");
    }
}
