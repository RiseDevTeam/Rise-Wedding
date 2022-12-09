<?php

namespace App\Http\Controllers\User\TemplateInvitation;

use App\Models\BiodataMusik;
use Illuminate\Http\Request;
use App\Models\MusikTemplate;
use App\Models\BiodataHomePage;
use App\Models\BiodataPelanggan;
use App\Models\BiodataGaleriFoto;
use App\Models\BiodataJadwalAkad;
use App\Models\BiodataKutipanAyat;
use App\Models\BiodataPasanganPria;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Models\BiodataJadwalResepsi;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Models\BiodataJadwalResepsi2;
use App\Models\BiodataPasanganWanita;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class EditFormPemesananController extends Controller
{
    public function edit_form_pemesanan($id_pemesanan)
    {
        $idPemesanan = Crypt::decrypt($id_pemesanan);
        $data = PemesananInvitation::leftjoin('detail_pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'detail_pemesanan_invitation.id_pemesanan')
            ->leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->where('pemesanan_invitation.id_pemesanan', $idPemesanan)
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'template_invitation.link_hosting',
                'detail_pemesanan_invitation.isActive',
                'detail_pemesanan_invitation.keterangan_file'
            )
            ->get();
        $previewTemplate = [];
        foreach ($data as $datas) {
            if ($datas->isActive == '1') {
                array_push($previewTemplate, $datas->keterangan_file);
            }
        }
        $musikTemplate = MusikTemplate::all();
        $edit_form_pemesanan = PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->leftjoin('biodata_home_page', 'biodata_pelanggan.id_biodata_home_page', '=', 'biodata_home_page.id_biodata_home_page')
            ->leftjoin('biodata_kutipan_ayat', 'biodata_pelanggan.id_kutipan_ayat', '=', 'biodata_kutipan_ayat.id_kutipan_ayat')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pelanggan.id_pasangan_pria', '=', 'biodata_pasangan_pria.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pelanggan.id_pasangan_wanita', '=', 'biodata_pasangan_wanita.id_pasangan_wanita')
            ->leftjoin('biodata_jadwal_akad', 'biodata_pelanggan.id_jadwal_akad', '=', 'biodata_jadwal_akad.id_jadwal_akad')
            ->leftjoin('biodata_jadwal_resepsi', 'biodata_pelanggan.id_jadwal_resepsi', '=', 'biodata_jadwal_resepsi.id_jadwal_resepsi')
            ->leftjoin('biodata_jadwal_resepsi_2', 'biodata_pelanggan.id_jadwal_resepsi_2', '=', 'biodata_jadwal_resepsi_2.id_jadwal_resepsi_2')
            ->leftjoin('biodata_keluarga_besar_pria', 'biodata_pelanggan.id_keluarga_besar_pria', '=', 'biodata_keluarga_besar_pria.id_keluarga_besar_pria')
            ->leftjoin('biodata_keluarga_besar_wanita', 'biodata_pelanggan.id_keluarga_besar_wanita', '=', 'biodata_keluarga_besar_wanita.id_keluarga_besar_wanita')
            ->leftjoin('biodata_musik', 'biodata_pelanggan.id_musik', '=', 'biodata_musik.id_musik')
            ->where('pemesanan_invitation.id_pemesanan', $idPemesanan)
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'pemesanan_invitation.kategori_template',
                'pemesanan_invitation.link_hosting',
                'biodata_pelanggan.nomor_telepon',
                'biodata_pelanggan.nama_instagram',
                'biodata_home_page.*',
                'biodata_kutipan_ayat.kutipan_ayat',
                'biodata_pasangan_pria.*',
                'biodata_pasangan_wanita.*',
                'biodata_jadwal_akad.*',
                'biodata_jadwal_resepsi.*',
                'biodata_jadwal_resepsi_2.*',
                'biodata_keluarga_besar_pria.mengundang_pria',
                'biodata_keluarga_besar_pria.nama_keluarga_pria',
                'biodata_keluarga_besar_wanita.mengundang_wanita',
                'biodata_keluarga_besar_wanita.nama_keluarga_wanita',
                'biodata_musik.musik',
            )
            ->first();
        if ($edit_form_pemesanan->kategori_template == "Basic") {
            return view('frontend.template_invitation.edit_form_pemesanan.edit_form_basic', compact('edit_form_pemesanan', 'previewTemplate', 'datas', 'id_pemesanan'));
        } elseif ($edit_form_pemesanan->kategori_template == "Premium") {
            // dd($edit_form_pemesanan->nama_keluarga_pria);
            return view('frontend.template_invitation.edit_form_pemesanan.edit_form_premium', compact('edit_form_pemesanan', 'previewTemplate', 'datas', 'id_pemesanan', 'musikTemplate'));
        }
    }

    public function update_form_pemesanan(Request $request, $id_pemesanan)
    {
        // dd($id_pemesanan);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'nomor_telepon' => 'required|max:12',
            'nama_panggilan_pria' => 'required',
            'nama_panggilan_wanita' => 'required',
            'kata_pembuka' => 'required',
            'kutipan_ayat' => 'required',
            'nama_lengkap_pria' => 'required',
            'putra_dari' => 'required',
            'nama_bapak_pria' => 'required',
            'nama_ibu_pria' => 'required',
            'nama_lengkap_wanita' => 'required',
            'putri_dari' => 'required',
            'nama_bapak_wanita' => 'required',
            'nama_ibu_wanita' => 'required',
            'nama_instagram' => 'required',
            'link_hosting' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $pemesanan_edit = PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->where('id_pemesanan', $id_pemesanan)->first();

        // Edit biodata home Page
        BiodataHomePage::where('id_biodata_home_page', $pemesanan_edit->id_biodata_home_page)->update([
            'title' => $request->title,
            'nama_panggilan_pria' => $request->nama_panggilan_pria,
            'nama_panggilan_wanita' => $request->nama_panggilan_wanita,
            'kata_pembuka' => $request->kata_pembuka,
        ]);

        // Edit Biodata Kutipan Ayat
        BiodataKutipanAyat::where('id_kutipan_ayat', $pemesanan_edit->id_kutipan_ayat)->update([
            'kutipan_ayat' => $request->kutipan_ayat,
        ]);

        // Edit Biodata Pasangan Pria
        BiodataPasanganPria::where('id_pasangan_pria', $pemesanan_edit->id_pasangan_pria)->update([
            'nama_lengkap_pria' => $request->nama_lengkap_pria,
            'putra_dari' => $request->putra_dari,
            'nama_bapak_pria' => $request->nama_bapak_pria,
            'nama_ibu_pria' => $request->nama_ibu_pria,
        ]);

        // Edit Biodata Pasangan Wanita
        BiodataPasanganWanita::where('id_pasangan_wanita', $pemesanan_edit->id_pasangan_wanita)->update([
            'nama_lengkap_wanita' => $request->nama_lengkap_wanita,
            'putri_dari' => $request->putri_dari,
            'nama_bapak_wanita' => $request->nama_bapak_wanita,
            'nama_ibu_wanita' => $request->nama_ibu_wanita,
        ]);

        // Edit Biodata Jadwal Akad
        BiodataJadwalAkad::where('id_jadwal_akad', $pemesanan_edit->id_jadwal_akad)->update([
            'tanggal_akad' => $request->tanggal_akad,
            'jam_mulai_akad' => $request->jam_mulai_akad,
            'waktu_wilayah_akad' => $request->waktu_wilayah_akad,
            'lokasi_akad' => $request->lokasi_akad,
        ]);

        // Edit Biodata Jadwal Resepsi
        BiodataJadwalResepsi::where('id_jadwal_resepsi', $pemesanan_edit->id_jadwal_resepsi)->update([
            'tanggal_resepsi' => $request->tanggal_resepsi,
            'jam_mulai_resepsi' => $request->jam_mulai_resepsi,
            'waktu_wilayah_resepsi' => $request->waktu_wilayah_resepsi,
            'lokasi_resepsi' => $request->lokasi_resepsi,
        ]);

        // Edit Biodata Jadwal Resepsi 2
        BiodataJadwalResepsi2::where('id_jadwal_resepsi_2', $pemesanan_edit->id_jadwal_resepsi_2)->update([
            'tanggal_resepsi_2' => $request->tanggal_resepsi_2,
            'jam_mulai_resepsi_2' => $request->jam_mulai_resepsi_2,
            'waktu_wilayah_resepsi_2' => $request->waktu_wilayah_resepsi_2,
            'lokasi_resepsi_2' => $request->lokasi_resepsi_2,
        ]);

        // Edit Biodata Jadwal Resepsi 2
        if ($request->file('musik1')) {
            $musik1 = time();
            // Upload file dengan Helpers Laravel
            $audio1 = uploadImage($request->file('musik1'), 'user_page/template/public/biodata_pelanggan/musik/', $musik1);

            BiodataMusik::where('id_musik', $pemesanan_edit->id_musik)->update([
                'musik' => $audio1
            ]);
        }

        // Edit Biodata Pelanggan
        BiodataPelanggan::where('id_biodata_pelanggan', $pemesanan_edit->id_biodata_pelanggan)->update([
            'nomor_telepon' => $request->nomor_telepon,
            'nama_instagram' => $request->nama_instagram,
        ]);

        // Edit Biodata Pemesanan Invitation
        PemesananInvitation::where('id_pemesanan', $pemesanan_edit->id_pemesanan)->update([
            'link_hosting' => $request->link_hosting,
        ]);


        return response()->json([
            "success" => "Data berhasil Disimpan",
        ]);
    }

    public function edit_form_gambar($id_pemesanan)
    {
        //   Encripsi id Pemesanan
        $idPemesanan = Crypt::decrypt($id_pemesanan);

        $edit_pemesanan_gambar =  PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->leftjoin('biodata_galeri_foto', 'biodata_pelanggan.id_galeri_foto', '=', 'biodata_galeri_foto.id_galeri_foto')->where('id_pemesanan', $idPemesanan)
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'biodata_pelanggan.id_biodata_pelanggan',
                'biodata_galeri_foto.id_galeri_foto',
                'biodata_galeri_foto.gambar_mempelai',
                'biodata_galeri_foto.gambar_mempelai_pria',
                'biodata_galeri_foto.gambar_mempelai_wanita',
                'biodata_galeri_foto.galeri_foto1',
                'biodata_galeri_foto.galeri_foto2',
                'biodata_galeri_foto.galeri_foto3',
                'biodata_galeri_foto.galeri_foto4',
                'biodata_galeri_foto.galeri_foto5',
            )
            ->first();
        return view('frontend.template_invitation.edit_form_pemesanan.edit_form_gambar_basic', compact('edit_pemesanan_gambar', 'idPemesanan'));
    }


    public function update_form_gambar(Request $request, $id_pemesanan)
    {
        // dd($id_pemesanan);
        $update_pemesanan = PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->select('biodata_pelanggan.id_galeri_foto')
            ->where('pemesanan_invitation.id_pemesanan', $id_pemesanan)
            ->first();

        $update_form_pemesanan = BiodataGaleriFoto::where('id_galeri_foto', $update_pemesanan->id_galeri_foto)->first();
        if ($request->file('gambar_mempelai')) {

            $gambar_mempelai = $request->file('gambar_mempelai');
            $gambarMempelai = time() . rand(1, 100) . '.' . $gambar_mempelai->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai->getRealPath());
            $img->resize(1728, 1162, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai/' . $gambarMempelai);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_mempelai/' . $update_form_pemesanan->gambar_mempelai);
            $update_form_pemesanan->gambar_mempelai = $gambarMempelai;
        }

        if ($request->file('gambar_mempelai_pria')) {

            $gambar_mempelai_pria = $request->file('gambar_mempelai_pria');
            $gambarMempelaiPria = time() . rand(1, 100) . '.' . $gambar_mempelai_pria->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_pria->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/' . $gambarMempelaiPria);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/' . $update_form_pemesanan->gambar_mempelai_pria);
            $update_form_pemesanan->gambar_mempelai_pria = $gambarMempelaiPria;
        }

        if ($request->file('gambar_mempelai_wanita')) {

            $gambar_mempelai_wanita = $request->file('gambar_mempelai_wanita');
            $gambarMempelaiWanita = time() . rand(1, 100) . '.' . $gambar_mempelai_wanita->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_wanita->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/' . $gambarMempelaiWanita);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/' . $update_form_pemesanan->gambar_mempelai_wanita);
            $update_form_pemesanan->gambar_mempelai_wanita = $gambarMempelaiWanita;
        }

        if ($request->file('galeri_foto1')) {

            $galeri_foto1 = $request->file('galeri_foto1');
            $gambarFoto1 = time() . rand(1, 100) . '.' . $galeri_foto1->getClientOriginalExtension();
            $img = Image::make($galeri_foto1->getRealPath());
            $img->resize(700, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto1);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan->galeri_foto1);
            $update_form_pemesanan->galeri_foto1 = $gambarFoto1;
        }

        if ($request->file('galeri_foto2')) {

            $galeri_foto2 = $request->file('galeri_foto2');
            $gambarFoto2 = time() . rand(1, 100) . '.' . $galeri_foto2->getClientOriginalExtension();
            $img = Image::make($galeri_foto2->getRealPath());
            $img->resize(700, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto2);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan->galeri_foto2);
            $update_form_pemesanan->galeri_foto2 = $gambarFoto2;
        }

        if ($request->file('galeri_foto3')) {

            $galeri_foto3 = $request->file('galeri_foto3');
            $gambarFoto3 = time() . rand(1, 100) . '.' . $galeri_foto3->getClientOriginalExtension();
            $img = Image::make($galeri_foto3->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto3);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan->galeri_foto3);
            $update_form_pemesanan->galeri_foto3 = $gambarFoto3;
        }

        if ($request->file('galeri_foto4')) {

            $galeri_foto4 = $request->file('galeri_foto4');
            $gambarFoto4 = time() . rand(1, 100) . '.' . $galeri_foto4->getClientOriginalExtension();
            $img = Image::make($galeri_foto4->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto4);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan->galeri_foto4);
            $update_form_pemesanan->galeri_foto4 = $gambarFoto4;
        }

        if ($request->file('galeri_foto5')) {

            $galeri_foto5 = $request->file('galeri_foto5');
            $gambarFoto5 = time() . rand(1, 100) . '.' . $galeri_foto5->getClientOriginalExtension();
            $img = Image::make($galeri_foto5->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto5);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan->galeri_foto5);
            $update_form_pemesanan->galeri_foto5 = $gambarFoto5;
        }

        $update_form_pemesanan->save();
        return response()->json([
            "success" => "Data berhasil Disimpan",
        ]);
    }

    public function update_form_pemesanan_premium(Request $request, $id_pemesanan)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'nomor_telepon' => 'required|max:12',
            'nama_panggilan_pria' => 'required',
            'nama_panggilan_wanita' => 'required',
            'kata_pembuka' => 'required',
            'kutipan_ayat' => 'required',
            'nama_lengkap_pria' => 'required',
            'putra_dari' => 'required',
            'nama_bapak_pria' => 'required',
            'nama_ibu_pria' => 'required',
            'nama_lengkap_wanita' => 'required',
            'putri_dari' => 'required',
            'nama_bapak_wanita' => 'required',
            'nama_ibu_wanita' => 'required',
            'nama_instagram' => 'required',
            'link_hosting' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $pemesanan_edit_premium = PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->where('id_pemesanan', $id_pemesanan)->first();
        // Edit biodata home Page
        BiodataHomePage::where('id_biodata_home_page', $pemesanan_edit_premium->id_biodata_home_page)->update([
            'title' => $request->title,
            'nama_panggilan_pria' => $request->nama_panggilan_pria,
            'nama_panggilan_wanita' => $request->nama_panggilan_wanita,
            'kata_pembuka' => $request->kata_pembuka,
        ]);

        // Edit Biodata Kutipan Ayat
        BiodataKutipanAyat::where('id_kutipan_ayat', $pemesanan_edit_premium->id_kutipan_ayat)->update([
            'kutipan_ayat' => $request->kutipan_ayat,
        ]);

        // Edit Biodata Pasangan Pria
        BiodataPasanganPria::where('id_pasangan_pria', $pemesanan_edit_premium->id_pasangan_pria)->update([
            'nama_lengkap_pria' => $request->nama_lengkap_pria,
            'putra_dari' => $request->putra_dari,
            'nama_bapak_pria' => $request->nama_bapak_pria,
            'nama_ibu_pria' => $request->nama_ibu_pria,
        ]);

        // Edit Biodata Pasangan Wanita
        BiodataPasanganWanita::where('id_pasangan_wanita', $pemesanan_edit_premium->id_pasangan_wanita)->update([
            'nama_lengkap_wanita' => $request->nama_lengkap_wanita,
            'putri_dari' => $request->putri_dari,
            'nama_bapak_wanita' => $request->nama_bapak_wanita,
            'nama_ibu_wanita' => $request->nama_ibu_wanita,
        ]);

        // Edit Biodata Jadwal Akad
        BiodataJadwalAkad::where('id_jadwal_akad', $pemesanan_edit_premium->id_jadwal_akad)->update([
            'tanggal_akad' => $request->tanggal_akad,
            'jam_mulai_akad' => $request->jam_mulai_akad,
            'waktu_wilayah_akad' => $request->waktu_wilayah_akad,
            'lokasi_akad' => $request->lokasi_akad,
        ]);

        // Edit Biodata Jadwal Resepsi
        BiodataJadwalResepsi::where('id_jadwal_resepsi', $pemesanan_edit_premium->id_jadwal_resepsi)->update([
            'tanggal_resepsi' => $request->tanggal_resepsi,
            'jam_mulai_resepsi' => $request->jam_mulai_resepsi,
            'waktu_wilayah_resepsi' => $request->waktu_wilayah_resepsi,
            'lokasi_resepsi' => $request->lokasi_resepsi,
        ]);

        // Edit Biodata Jadwal Resepsi 2
        BiodataJadwalResepsi2::where('id_jadwal_resepsi_2', $pemesanan_edit_premium->id_jadwal_resepsi_2)->update([
            'tanggal_resepsi_2' => $request->tanggal_resepsi_2,
            'jam_mulai_resepsi_2' => $request->jam_mulai_resepsi_2,
            'waktu_wilayah_resepsi_2' => $request->waktu_wilayah_resepsi_2,
            'lokasi_resepsi_2' => $request->lokasi_resepsi_2,
        ]);

        // Edit Biodata Jadwal Resepsi 2
        if ($request->file('musik1')) {
            $musik1 = time();
            // Upload file dengan Helpers Laravel
            $audio1 = uploadImage($request->file('musik1'), 'user_page/template/public/biodata_pelanggan/musik/', $musik1);

            BiodataMusik::where('id_musik', $pemesanan_edit_premium->id_musik)->update([
                'musik' => $audio1
            ]);
        }

        // Edit Biodata Pelanggan
        BiodataPelanggan::where('id_biodata_pelanggan', $pemesanan_edit_premium->id_biodata_pelanggan)->update([
            'nomor_telepon' => $request->nomor_telepon,
            'nama_instagram' => $request->nama_instagram,
        ]);

        // Edit Biodata Pemesanan Invitation
        PemesananInvitation::where('id_pemesanan', $pemesanan_edit_premium->id_pemesanan)->update([
            'link_hosting' => $request->link_hosting,
        ]);


        return response()->json([
            "success" => "Data berhasil Disimpan",
        ]);
    }

    public function edit_form_gambar_premium($id_pemesanan)
    {
        //   Encripsi id Pemesanan
        $idPemesanan_premium = Crypt::decrypt($id_pemesanan);
        $edit_pemesanan_gambar_premium =  PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->leftjoin('biodata_galeri_foto', 'biodata_pelanggan.id_galeri_foto', '=', 'biodata_galeri_foto.id_galeri_foto')->where('id_pemesanan', $idPemesanan_premium)
            ->select(
                'pemesanan_invitation.id_pemesanan',
                'biodata_pelanggan.id_biodata_pelanggan',
                'biodata_galeri_foto.id_galeri_foto',
                'biodata_galeri_foto.gambar_mempelai',
                'biodata_galeri_foto.gambar_mempelai_pria',
                'biodata_galeri_foto.gambar_mempelai_wanita',
                'biodata_galeri_foto.galeri_foto1',
                'biodata_galeri_foto.galeri_foto2',
                'biodata_galeri_foto.galeri_foto3',
                'biodata_galeri_foto.galeri_foto4',
                'biodata_galeri_foto.galeri_foto5',
                'biodata_galeri_foto.galeri_foto6',
                'biodata_galeri_foto.galeri_foto7',
                'biodata_galeri_foto.galeri_foto8',
                'biodata_galeri_foto.galeri_foto9',
            )
            ->first();
        return view('frontend.template_invitation.edit_form_pemesanan.edit_form_gambar_premium', compact('edit_pemesanan_gambar_premium', 'idPemesanan_premium'));
    }

    public function post_form_gambar_premium(Request $request, $id_pemesanan)
    {
        $update_pemesanan_premium = PemesananInvitation::leftjoin('biodata_pelanggan', 'pemesanan_invitation.id_biodata_pelanggan', '=', 'biodata_pelanggan.id_biodata_pelanggan')
            ->select('biodata_pelanggan.id_galeri_foto')
            ->where('pemesanan_invitation.id_pemesanan', $id_pemesanan)
            ->first();

        $update_form_pemesanan_premium = BiodataGaleriFoto::where('id_galeri_foto', $update_pemesanan_premium->id_galeri_foto)->first();

        if ($request->file('gambar_mempelai')) {

            $gambar_mempelai = $request->file('gambar_mempelai');
            $gambarMempelai = time() . rand(1, 100) . '.' . $gambar_mempelai->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai->getRealPath());
            $img->resize(1728, 1162, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai/' . $gambarMempelai);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_mempelai/' . $update_form_pemesanan_premium->gambar_mempelai);
            $update_form_pemesanan_premium->gambar_mempelai = $gambarMempelai;
        }

        if ($request->file('gambar_mempelai_pria')) {

            $gambar_mempelai_pria = $request->file('gambar_mempelai_pria');
            $gambarMempelaiPria = time() . rand(1, 100) . '.' . $gambar_mempelai_pria->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_pria->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/' . $gambarMempelaiPria);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_mempelai_pria/' . $update_form_pemesanan_premium->gambar_mempelai_pria);
            $update_form_pemesanan_premium->gambar_mempelai_pria = $gambarMempelaiPria;
        }

        if ($request->file('gambar_mempelai_wanita')) {

            $gambar_mempelai_wanita = $request->file('gambar_mempelai_wanita');
            $gambarMempelaiWanita = time() . rand(1, 100) . '.' . $gambar_mempelai_wanita->getClientOriginalExtension();
            $img = Image::make($gambar_mempelai_wanita->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/' . $gambarMempelaiWanita);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_mempelai_wanita/' . $update_form_pemesanan_premium->gambar_mempelai_wanita);
            $update_form_pemesanan_premium->gambar_mempelai_wanita = $gambarMempelaiWanita;
        }

        if ($request->file('galeri_foto1')) {

            $galeri_foto1 = $request->file('galeri_foto1');
            $gambarFoto1 = time() . rand(1, 100) . '.' . $galeri_foto1->getClientOriginalExtension();
            $img = Image::make($galeri_foto1->getRealPath());
            $img->resize(700, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto1);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto1);
            $update_form_pemesanan_premium->galeri_foto1 = $gambarFoto1;
        }

        if ($request->file('galeri_foto2')) {

            $galeri_foto2 = $request->file('galeri_foto2');
            $gambarFoto2 = time() . rand(1, 100) . '.' . $galeri_foto2->getClientOriginalExtension();
            $img = Image::make($galeri_foto2->getRealPath());
            $img->resize(700, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto2);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto2);
            $update_form_pemesanan_premium->galeri_foto2 = $gambarFoto2;
        }

        if ($request->file('galeri_foto3')) {

            $galeri_foto3 = $request->file('galeri_foto3');
            $gambarFoto3 = time() . rand(1, 100) . '.' . $galeri_foto3->getClientOriginalExtension();
            $img = Image::make($galeri_foto3->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto3);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto3);
            $update_form_pemesanan_premium->galeri_foto3 = $gambarFoto3;
        }

        if ($request->file('galeri_foto4')) {

            $galeri_foto4 = $request->file('galeri_foto4');
            $gambarFoto4 = time() . rand(1, 100) . '.' . $galeri_foto4->getClientOriginalExtension();
            $img = Image::make($galeri_foto4->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto4);


            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto4);
            $update_form_pemesanan_premium->galeri_foto4 = $gambarFoto4;
        }

        if ($request->file('galeri_foto5')) {

            $galeri_foto5 = $request->file('galeri_foto5');
            $gambarFoto5 = time() . rand(1, 100) . '.' . $galeri_foto5->getClientOriginalExtension();
            $img = Image::make($galeri_foto5->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto5);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto5);
            $update_form_pemesanan_premium->galeri_foto5 = $gambarFoto5;
        }

        if ($request->file('galeri_foto6')) {

            $galeri_foto6 = $request->file('galeri_foto6');
            $gambarFoto6 = time() . rand(1, 100) . '.' . $galeri_foto6->getClientOriginalExtension();
            $img = Image::make($galeri_foto6->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto6);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto6);
            $update_form_pemesanan_premium->galeri_foto6 = $gambarFoto6;
        }

        if ($request->file('galeri_foto7')) {

            $galeri_foto7 = $request->file('galeri_foto7');
            $gambarFoto7 = time() . rand(1, 100) . '.' . $galeri_foto7->getClientOriginalExtension();
            $img = Image::make($galeri_foto7->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto7);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto7);
            $update_form_pemesanan_premium->galeri_foto7 = $gambarFoto7;
        }

        if ($request->file('galeri_foto8')) {

            $galeri_foto8 = $request->file('galeri_foto8');
            $gambarFoto8 = time() . rand(1, 100) . '.' . $galeri_foto8->getClientOriginalExtension();
            $img = Image::make($galeri_foto8->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto8);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto8);
            $update_form_pemesanan_premium->galeri_foto8 = $gambarFoto8;
        }

        if ($request->file('galeri_foto9')) {

            $galeri_foto9 = $request->file('galeri_foto9');
            $gambarFoto9 = time() . rand(1, 100) . '.' . $galeri_foto9->getClientOriginalExtension();
            $img = Image::make($galeri_foto9->getRealPath());
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_page/template/public/biodata_pelanggan/gambar_galeri/' . $gambarFoto9);

            File::delete(public_path() . '/user_page/template/public/biodata_pelanggan/gambar_galeri/' . $update_form_pemesanan_premium->galeri_foto9);
            $update_form_pemesanan_premium->galeri_foto9 = $gambarFoto9;
        }

        $update_form_pemesanan_premium->save();
        return response()->json([
            "success" => "Data berhasil Disimpan",
        ]);
    }
}
