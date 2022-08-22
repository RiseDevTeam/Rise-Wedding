<?php

namespace App\Http\Controllers\Admin\KelolaAkun;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PimpinanController extends Controller
{
    public function pelanggan()
    {
        $dataPimpinan = User::where('status', 'pimpinan')->paginate(10);
        return view('backend.admin.pimpinan.index', compact('dataPimpinan'));
    }
}
