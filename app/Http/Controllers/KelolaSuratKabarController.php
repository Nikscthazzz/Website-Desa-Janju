<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaSuratKabarController extends Controller
{
    public function kelolaSuratKabar()
    {
        return view("dashboard.kelola-surat-kabar");
    }
}
