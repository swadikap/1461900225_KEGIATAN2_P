<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controller;
use Illuminate\Support\facades\DB;
class iqbalController extends Controller
{
    public function anggota ()
    {
        $anggota = DB ::table('anggota')-.get();
        return view('anggota0225',['anggota' =>.$anggota]);
    }
}
