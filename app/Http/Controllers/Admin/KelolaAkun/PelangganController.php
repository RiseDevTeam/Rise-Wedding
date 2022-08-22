<?php

namespace App\Http\Controllers\Admin\KelolaAkun;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    public function pelanggan()
    {
        $dataPelanggan = User::where('status', 'pelanggan')->paginate(10);
        return view('backend.admin.pelanggan.pelanggan', compact('dataPelanggan'));
    }
}
