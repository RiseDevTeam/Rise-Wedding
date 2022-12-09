<?php

namespace App\Http\Controllers\User\Users;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\KategoriTemplate;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Models\RincianKetegoriTemplate;

class UserPageController extends Controller
{
    public function kategori_template()
    {
        // menampilkan kategori template pada halaman utama
        $KategoriTemplate = KategoriTemplate::leftjoin('rincian_kategori_template', 'kategori_template.id_kategori_template', '=', 'rincian_kategori_template.id_kategori')->select('id_kategori_template', 'kategori', 'harga', 'rincian_kategori_template')->get();
        // menampilkan kategori template pada halaman utama
        return view('frontend.template_invitation.kategori_template', compact('KategoriTemplate'));
        // return view('frontend.template_invitation.kategori_template');
    }

    public function video_invitation()
    {
        return view('frontend.video_invitation.video_invitation');
    }

    public function portfolio()
    {
        $portofolio = PemesananInvitation::leftjoin('detail_pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'detail_pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('pembayaran_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->leftjoin('kategori_template', 'pemesanan_invitation.kategori_template', '=', 'kategori_template.kategori')
            ->leftjoin('detail_pembayaran_invitation', 'pembayaran_invitation.id_pembayaran', '=', 'detail_pembayaran_invitation.id_pembayaran')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pelanggan.id_pasangan_pria', '=', 'biodata_pasangan_pria.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pelanggan.id_pasangan_wanita', '=', 'biodata_pasangan_wanita.id_pasangan_wanita')
            ->select(
                'template_invitation.gambar_cover',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'pemesanan_invitation.id_pemesanan',
                'pembayaran_invitation.status as status_pembayaran',
                'pemesanan_invitation.status as status_pemesanan',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_wanita',
                'biodata_pelanggan.id_user',
                'kategori_template.harga',
                'detail_pembayaran_invitation.total'
            )
            ->orderby('pemesanan_invitation.id_pemesanan', 'desc')
            ->groupBy('pemesanan_invitation.id_pemesanan')
            ->get();
        // dd($portofolio);
        return view('frontend.portfolio.portfolio', compact('portofolio'));
    }

    public function blog()
    {
        $blog = Blog::where('isActive', '1')->orderBy('id_blog', 'desc')->first();
        $blogLain = Blog::where('isActive', '1')
            ->orderBy('id_blog', 'desc')->get();

        if ($blogLain == Null || $blog == Null) {
            return redirect('/')->with('blog', 'Blog Belum Ada!');
        } else {
            return view('frontend.blog.blog', compact('blog', 'blogLain'));
        }
    }

    public function detail_blog($id_blog)
    {
        $blog = Crypt::decrypt($id_blog);
        $blogDetail = blog::where('id_blog', $blog)->first();
        $blogLain = Blog::where('isActive', '1')
            ->orderBy('id_blog', 'desc')->get();
        return view('frontend.blog.detail_blog', compact('blogDetail', 'blogLain'));
    }
}
