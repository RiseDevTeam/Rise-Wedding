<?php

namespace App\Http\Controllers\User\TemplateInvitation;

use Illuminate\Http\Request;
// use Intervention\Image\Image;
use App\Models\BiodataPelanggan;
use App\Models\BiodataGaleriFoto;
use App\Models\TemplateInvitation;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PemesananGambarController extends Controller
{
    public function form_gambar_basic($id_template)
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

        $idPemesanan = Crypt::encrypt($pemesanan->id_pemesanan);

        return view('frontend.template_invitation.form_pemesanan.form_gambar_basic', compact('kategori', 'pemesanan', 'id_template', 'idPemesanan'));
    }

    public function form_gambar_premium($id_template)
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

        $idPemesanan = Crypt::encrypt($pemesanan->id_pemesanan);

        return view('frontend.template_invitation.form_pemesanan.form_gambar_premium', compact('kategori', 'pemesanan', 'id_template', 'idPemesanan'));
    }

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

            $gambar_mempelai = $request->file('gambar_mempelai');
            $gambarMempelai = time() . rand(1, 100) . '.' . $gambar_mempelai->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai->getRealPath());
            $img->resize(1728, 1162, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai/' . $gambarMempelai);
        }

        if ($request->file('gambar_mempelai_pria')) {

            $gambar_mempelai_pria = $request->file('gambar_mempelai_pria');
            $gambarMempelaiPria = time() . rand(1, 100) . '.' . $gambar_mempelai_pria->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_pria->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/' . $gambarMempelaiPria);
        }


        if ($request->file('gambar_mempelai_wanita')) {
            $gambar_mempelai_wanita = $request->file('gambar_mempelai_wanita');
            $gambarMempelaiWanita = time() . rand(1, 100) . '.' . $gambar_mempelai_wanita->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_wanita->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/' . $gambarMempelaiWanita);
        }

        if ($request->file('galeri_foto1')) {
            $galeri_foto1 = $request->file('galeri_foto1');
            $gambarFoto1 = time() . rand(1, 100) . '.' . $galeri_foto1->getClientOriginalExtension();
            $img = Image::make($galeri_foto1->getRealPath());
            $img->resize(700, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto1);
        }

        if ($request->file('galeri_foto2')) {

            $galeri_foto2 = $request->file('galeri_foto2');
            $gambarFoto2 = time() . rand(1, 100) . '.' . $galeri_foto2->getClientOriginalExtension();
            $img = Image::make($galeri_foto2->getRealPath());
            $img->resize(700, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto2);
        }

        if ($request->file('galeri_foto3')) {

            $galeri_foto3 = $request->file('galeri_foto3');
            $gambarFoto3 = time() . rand(1, 100) . '.' . $galeri_foto3->getClientOriginalExtension();
            $img = Image::make($galeri_foto3->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto3);
        }

        if ($request->file('galeri_foto4')) {
            $galeri_foto4 = $request->file('galeri_foto4');
            $gambarFoto4 = time() . rand(1, 100) . '.' . $galeri_foto4->getClientOriginalExtension();
            $img = Image::make($galeri_foto4->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto4);
        }

        if ($request->file('galeri_foto5')) {
            $galeri_foto5 = $request->file('galeri_foto5');
            $gambarFoto5 = time() . rand(1, 100) . '.' . $galeri_foto5->getClientOriginalExtension();
            $img = Image::make($galeri_foto5->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto5);
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

    public function data_gambar_premium(Request $request, $id_template)
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
            'galeri_foto6' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto7' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto8' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'galeri_foto9' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('gambar_mempelai')) {

            $gambar_mempelai = $request->file('gambar_mempelai');
            $gambarMempelai = time() . rand(1, 100) . '.' . $gambar_mempelai->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai->getRealPath());
            $img->resize(1728, 1162, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai/' . $gambarMempelai);
        }

        if ($request->file('gambar_mempelai_pria')) {

            $gambar_mempelai_pria = $request->file('gambar_mempelai_pria');
            $gambarMempelaiPria = time() . rand(1, 100) . '.' . $gambar_mempelai_pria->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_pria->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/' . $gambarMempelaiPria);
        }

        if ($request->file('gambar_mempelai_wanita')) {
            $gambar_mempelai_wanita = $request->file('gambar_mempelai_wanita');
            $gambarMempelaiWanita = time() . rand(1, 100) . '.' . $gambar_mempelai_wanita->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_wanita->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/' . $gambarMempelaiWanita);
        }

        if ($request->file('galeri_foto1')) {
            $galeri_foto1 = $request->file('galeri_foto1');
            $gambarFoto1 = time() . rand(1, 100) . '.' . $galeri_foto1->getClientOriginalExtension();
            $img = Image::make($galeri_foto1->getRealPath());
            $img->resize(700, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto1);
        }

        if ($request->file('galeri_foto2')) {

            $galeri_foto2 = $request->file('galeri_foto2');
            $gambarFoto2 = time() . rand(1, 100) . '.' . $galeri_foto2->getClientOriginalExtension();
            $img = Image::make($galeri_foto2->getRealPath());
            $img->resize(700, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto2);
        }

        if ($request->file('galeri_foto3')) {

            $galeri_foto3 = $request->file('galeri_foto3');
            $gambarFoto3 = time() . rand(1, 100) . '.' . $galeri_foto3->getClientOriginalExtension();
            $img = Image::make($galeri_foto3->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto3);
        }

        if ($request->file('galeri_foto4')) {
            $galeri_foto4 = $request->file('galeri_foto4');
            $gambarFoto4 = time() . rand(1, 100) . '.' . $galeri_foto4->getClientOriginalExtension();
            $img = Image::make($galeri_foto4->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto4);
        }

        if ($request->file('galeri_foto5')) {
            $galeri_foto5 = $request->file('galeri_foto5');
            $gambarFoto5 = time() . rand(1, 100) . '.' . $galeri_foto5->getClientOriginalExtension();
            $img = Image::make($galeri_foto5->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto5);
        }

        if ($request->file('galeri_foto6')) {
            $galeri_foto6 = $request->file('galeri_foto6');
            $gambarFoto6 = time() . rand(1, 100) . '.' . $galeri_foto6->getClientOriginalExtension();
            $img = Image::make($galeri_foto6->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto6);
        }

        if ($request->file('galeri_foto7')) {
            $galeri_foto7 = $request->file('galeri_foto7');
            $gambarFoto7 = time() . rand(1, 100) . '.' . $galeri_foto7->getClientOriginalExtension();
            $img = Image::make($galeri_foto7->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto7);
        }

        if ($request->file('galeri_foto8')) {
            $galeri_foto8 = $request->file('galeri_foto8');
            $gambarFoto8 = time() . rand(1, 100) . '.' . $galeri_foto8->getClientOriginalExtension();
            $img = Image::make($galeri_foto8->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto8);
        }

        if ($request->file('galeri_foto9')) {
            $galeri_foto9 = $request->file('galeri_foto9');
            $gambarFoto9 = time() . rand(1, 100) . '.' . $galeri_foto9->getClientOriginalExtension();
            $img = Image::make($galeri_foto9->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto9);
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
        $BiodataGaleriFoto->galeri_foto6 = $gambarFoto6;
        $BiodataGaleriFoto->galeri_foto7 = $gambarFoto7;
        $BiodataGaleriFoto->galeri_foto8 = $gambarFoto8;
        $BiodataGaleriFoto->galeri_foto9 = $gambarFoto9;
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
}
