<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PembayaranInvitation;
use App\Models\PemesananInvitation;
use App\Models\User;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.admin.dashboard');
    }

    public function showDetil()
    {
        $user = User::count();
        $pesanPending = PemesananInvitation::where('status','pending')->count();
        $pesanSelesai = PemesananInvitation::where('status','sudah bayar')->count();
        $bayarPending = PembayaranInvitation::where('status','pending')->count();
        $bayarSelesai = PembayaranInvitation::where('status','sudah bayar')->count();
        $blog         = Blog::count();
        
        return view('backend.admin.dashboard',compact('user','pesanPending','pesanSelesai','bayarPending','bayarSelesai','blog'));
    }
}
