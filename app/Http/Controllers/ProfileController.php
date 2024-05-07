<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Karyawan;
use App\Models\User; // Import model User

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user->load('karyawan'); // Gunakan eager loading
        $karyawan = $user->karyawan;
        return view('layout.profile', compact('karyawan'));
    }
}