<?php

namespace App\Http\Controllers\User\LinkHosting;

use Illuminate\Http\Request;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LinkHostingController extends Controller
{
    public function hostingan_user($link_hosting)
    {
        if (Auth::User()) {
            # code...
            $hostingan =  PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
                ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
                ->select(
                    'pemesanan_invitation.id_pemesanan',
                    'pemesanan_invitation.kategori_template',
                    'pemesanan_invitation.link_hosting',
                    'template_invitation.file_master',
                    'biodata_pelanggan.id_user',
                )
                ->where('pemesanan_invitation.link_hosting', $link_hosting)
                ->where('biodata_pelanggan.id_user', Auth::User()->id)
                ->first();
            return view('frontend.hosting.link_hostingan', compact('hostingan'));
        } else {
            # code...
        }
    }

    public function upload_tamu_undangan($link_hosting)
    {

        $hostingan =  PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'template_invitation.file_master',
                'biodata_pelanggan.id_user',
            )
            ->where('pemesanan_invitation.link_hosting', $link_hosting)
            ->where('biodata_pelanggan.id_user', Auth::User()->id)
            ->first();
        // dd($link_hosting);
        // $hostingan =  PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
        //     ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
        //     ->select(
        //         'pemesanan_invitation.kategori_template',
        //         'pemesanan_invitation.link_hosting',
        //         'template_invitation.file_master',
        //         'biodata_pelanggan.id_user',
        //     )
        //     // ->where('pemesanan_invitation.link_hosting', $link_hosting)
        //     // ->where('biodata_pelanggan.id_user', Auth::User()->id)
        //     ->first();
        // // dd($hostingan);
        // return view('frontend.hosting.link_hostingan', compact('hostingan'));

    }
}
