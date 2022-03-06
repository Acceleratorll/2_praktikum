<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function me() {
        $nim = 2041720070;
        $nama = "Moch Fajrul Falah";
        $kelas = "2B";
        return "$nim $nama $kelas";
    }
}
