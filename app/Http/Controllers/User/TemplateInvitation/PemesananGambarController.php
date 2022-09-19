<?php

namespace App\Http\Controllers\User\TemplateInvitation;

use Illuminate\Http\Request;
use App\Models\BiodataGaleriFoto;
use App\Models\TemplateInvitation;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Models\BiodataPelanggan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PemesananGambarController extends Controller
{
    public function data_gambar($id_template)
    {
        $idTemplate = Crypt::decrypt($id_template);

        // menampilkan id template pada halaman input biodata pelanggan
        $templateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('kategori_template.kategori')->where('id_template', $idTemplate)->first();
        $kategori = $templateInvitation->kategori;

        $pemesanan = PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->where('pemesanan_invitation.id_template', $idTemplate)
            ->where('biodata_pelanggan.id_user', Auth::User()->id)
            ->orderBy('pemesanan_invitation.id_pemesanan', 'desc')
            ->select('pemesanan_invitation.id_pemesanan', 'template_invitation.link_hosting', 'biodata_pelanggan.id_user', 'pemesanan_invitation.id_biodata_pelanggan')
            ->first();
        return view('frontend.template_invitation.form_data_gambar', compact('kategori', 'pemesanan', 'id_template'));
        // return redirect()->route('form_data_gambar', $idTemplate);
    }

    // public function form_data_gambar($idTemplate)
    // {
    //     // menampilkan id template pada halaman input biodata pelanggan
    //     $templateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
    //         ->select('kategori_template.kategori')->where('id_template', $idTemplate)->first();
    //     $kategori = $templateInvitation->kategori;

    //     $pemesanan = PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
    //         ->leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
    //         ->where('pemesanan_invitation.id_template', $idTemplate)
    //         ->where('biodata_pelanggan.id_user', Auth::User()->id)
    //         ->orderBy('pemesanan_invitation.id_pemesanan', 'desc')
    //         ->select('pemesanan_invitation.id_pemesanan', 'template_invitation.link_hosting', 'biodata_pelanggan.id_user', 'pemesanan_invitation.id_biodata_pelanggan')
    //         ->first();
    //     return view('frontend.template_invitation.form_data_gambar', compact('kategori', 'pemesanan', 'idTemplate'));
    // }

    public function data_gambar_basic(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'gambar_mempelai' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gambar_mempelai_pria' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'gambar_mempelai_wanita' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto4' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto5' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('gambar_mempelai')) {
            // Upload file dengan Helpers Laravel
            $gambarMempelai = uploadImage($request->file('gambar_mempelai'), 'user_page/template/public/biodata_pelanggan/gambar_mempelai/');
        }

        if ($request->file('gambar_mempelai_pria')) {
            // Upload file dengan Helpers Laravel
            $gambarMempelaiPria = uploadImage($request->file('gambar_mempelai_pria'), 'user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/');
        }

        if ($request->file('gambar_mempelai_wanita')) {
            // Upload file dengan Helpers Laravel
            $gambarMempelaiWanita = uploadImage($request->file('gambar_mempelai_wanita'), 'user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/');
        }

        if ($request->file('galeri_foto1')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto1 = uploadImage($request->file('galeri_foto1'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto2')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto2 = uploadImage($request->file('galeri_foto2'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto3')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto3 = uploadImage($request->file('galeri_foto3'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto4')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto4 = uploadImage($request->file('galeri_foto4'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        if ($request->file('galeri_foto5')) {
            // Upload file dengan Helpers Laravel
            $gambarFoto5 = uploadImage($request->file('galeri_foto5'), 'user_page/template/public/biodata_pelanggan/gambar_galeri/');
        }

        $BiodataGaleriFoto = new BiodataGaleriFoto;
        $BiodataGaleriFoto->gambar_mempelai = $gambarMempelai;
        $BiodataGaleriFoto->gambar_mempelai_pria = $gambarMempelaiPria;
        $BiodataGaleriFoto->gambar_mempelai_wanita = $gambarMempelaiWanita;
        $BiodataGaleriFoto->galeri_foto1 = $gambarFoto1;
        $BiodataGaleriFoto->galeri_foto2 = $gambarFoto2;
        $BiodataGaleriFoto->galeri_foto3 = $gambarFoto3;
        $BiodataGaleriFoto->galeri_foto4 = $gambarFoto4;
        $BiodataGaleriFoto->galeri_foto5 = $gambarFoto5;
        $BiodataGaleriFoto->save();
        // mengambil id Galeri Foto
        $IdGaleriFoto = $BiodataGaleriFoto->id_galeri_foto;

        BiodataPelanggan::where('id_biodata_pelanggan', $request->id_biodata_pelanggan)->update([
            'id_galeri_foto' => $IdGaleriFoto
        ]);

        return response()->json([
            "success" => "Data berhasil Disimpan",
        ]);
    }

    public function data_gambar_premium()
    {
    }
}
