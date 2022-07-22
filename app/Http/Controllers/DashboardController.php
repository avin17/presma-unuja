<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->role == 'mahasiswa') {
            return view('dashboard.mahasiswa', [
                'title' => 'Dashboard Mahasiswa'
            ]);
        } else {
            return view('dashboard.admin', [
                'title' => 'Dashboard Admin'
            ]);
        }
    }
}
