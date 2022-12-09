<?php

namespace App\Http\Controllers\User\TemplateInvitation;

use App\Models\BiodataMusik;
use App\Models\FileTemplate;
use Illuminate\Http\Request;
use App\Models\MusikTemplate;
use App\Models\BiodataHomePage;
use App\Models\PreviewTemplate;
use App\Models\BiodataPelanggan;
use App\Models\KategoriTemplate;
use App\Models\BiodataGaleriFoto;
use App\Models\BiodataJadwalAkad;
use App\Models\BiodataKutipanAyat;
use App\Models\TemplateInvitation;
use Illuminate\Support\Facades\DB;
use App\Models\BiodataPasanganPria;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Models\BiodataJadwalResepsi;
use Illuminate\Support\Facades\Auth;
use App\Models\BiodataJadwalResepsi2;
use App\Models\BiodataPasanganWanita;
use App\Models\DetailPreviewTemplate;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use App\Models\BiodataKeluargaBesarPria;
use App\Models\DetailPemesananInvitation;
use Illuminate\Support\Facades\Validator;
use App\Models\BiodataKeluargaBesarWanita;

class PemesananTemplate extends Controller
{
    public function template_invitation($id_kategori_template)
    {
        // decrypt id yang kita encripsi sebelumnya
        $kategori_template = Crypt::decrypt($id_kategori_template);

        $templateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('kategori_template.kategori', 'template_invitation.link_hosting', 'kategori_template.harga', 'template_invitation.id_user', 'template_invitation.id_kategori', 'template_invitation.gambar_cover', 'template_invitation.id_template')
            ->where('template_invitation.id_kategori', $kategori_template)->get();

        $kategori =  KategoriTemplate::where('id_kategori_template', $kategori_template)->select('kategori')->first();

        return view('frontend.template_invitation.template_invitation', compact('templateInvitation', 'kategori'));
    }

    public function detail_template($id_template)
    {
        return view('frontend.template_invitation.detail_template', ['id_template' => $id_template]);
    }

    public function pemesanan_template(Request $request, $id_template)
    {
        // decrypt id yang kita encripsi sebelumnya
        $kategori_template = Crypt::decrypt($id_template);
        $kategoriTemplate = DB::table('kategori_template')->where('id_kategori_template', $kategori_template)->select('kategori')->first();


        // input preview template pemesanan
        $data = new PreviewTemplate;
        $data->id_user = $request->id_user;
        $data->id_template = $request->id_template;
        $data->save();
        // mencari last id pada table preview template pemesanan
        $id_preview_template =  $data->id_preview_template_pemesanan;

        date_default_timezone_set('Asia/Jakarta');
        date('Y-m-d H:i:s');
        // input detail preview template
        foreach ($request->file_template as $key => $value) {
            DetailPreviewTemplate::create([
                'id_preview_template_pemesanan' => $id_preview_template,
                'file_template' => $value,
                'isActive' => $request->keterangan_aktif[$key],
                'keterangan_file' => $request->keterangan_file[$key],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        return redirect()->route('data_undangan', $id_template);
    }

    public function data_undangan($id_template)
    {
        // decrypt id yang kita encripsi sebelumnya
        $idTemplate = Crypt::decrypt($id_template);
        // menampilkan musik pada halaman input biodata pelanggan
        $musikTemplate = MusikTemplate::all();

        // menampilkan id template pada halaman input biodata pelanggan
        $templateInvitation = TemplateInvitation::leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->select('kategori_template.kategori')->where('id_template', $idTemplate)->first();
        $kategori = $templateInvitation->kategori;

        // menampilkan preview template di dalam form data
        $FilePreview = DetailPreviewTemplate::orderBy('detail_preview_template.created_at', 'desc')->select('detail_preview_template.id_preview_template_pemesanan')->first();
        $data = PreviewTemplate::leftjoin('template_invitation', 'preview_template_pemesanan.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('detail_preview_template', 'preview_template_pemesanan.id_preview_template_pemesanan', '=', 'detail_preview_template.id_preview_template_pemesanan')
            ->where('detail_preview_template.id_preview_template_pemesanan', $FilePreview->id_preview_template_pemesanan)
            ->where('preview_template_pemesanan.id_user', Auth::user()->id)
            ->select(
                'preview_template_pemesanan.id_preview_template_pemesanan',
                'template_invitation.link_hosting',
                'detail_preview_template.isActive',
                'detail_preview_template.keterangan_file'
            )
            ->get();
        $previewTemplate = [];
        foreach ($data as $datas) {
            if ($datas->isActive == '1') {
                array_push($previewTemplate, $datas->keterangan_file);
            }
        }
        return view('frontend.template_invitation.form_data_undangan', compact('kategori', 'musikTemplate', 'previewTemplate', 'id_template', 'datas'));
    }

    public function data_undangan_store_basic(Request $request, $kategori)
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
            'musik1' => 'required',
            'nama_instagram' => 'required',
            'link_hosting' => 'required|unique:pemesanan_invitation,link_hosting',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $BiodataHomePage = BiodataHomePage::create([
            'title' => $request->title,
            'nama_panggilan_pria' => $request->nama_panggilan_pria,
            'nama_panggilan_wanita' => $request->nama_panggilan_wanita,
            'kata_pembuka' => $request->kata_pembuka,
        ]);
        // mengambil id home page
        $IdhomePage = $BiodataHomePage->id_biodata_home_page;

        $BiodataKutipanAyat = BiodataKutipanAyat::create([
            'kutipan_ayat' => $request->kutipan_ayat,
        ]);
        // mengambil id Kutipan Ayat
        $IdKutipanAyat = $BiodataKutipanAyat->id_kutipan_ayat;

        $BiodataPasanganPria = BiodataPasanganPria::create([
            'nama_lengkap_pria' => $request->nama_lengkap_pria,
            'putra_dari' => $request->putra_dari,
            'nama_bapak_pria' => $request->nama_bapak_pria,
            'nama_ibu_pria' => $request->nama_ibu_pria,
        ]);
        // mengambil id biodata pasangan pria
        $IdPasanganPria = $BiodataPasanganPria->id_pasangan_pria;

        $BiodataPasanganWanita = BiodataPasanganWanita::create([
            'nama_lengkap_wanita' => $request->nama_lengkap_wanita,
            'putri_dari' => $request->putri_dari,
            'nama_bapak_wanita' => $request->nama_bapak_wanita,
            'nama_ibu_wanita' => $request->nama_ibu_wanita,
        ]);
        // mengambil id pasangan wanita
        $IdPasanganWanita = $BiodataPasanganWanita->id_pasangan_wanita;

        $BiodataJadwalAkad = BiodataJadwalAkad::create([
            'tanggal_akad' => $request->tanggal_akad,
            'jam_mulai_akad' => $request->jam_mulai_akad,
            'waktu_wilayah_akad' => $request->waktu_wilayah_akad,
            'lokasi_akad' => $request->lokasi_akad,
        ]);
        // mengambil id jadwal akad
        $IdJadwalAkad = $BiodataJadwalAkad->id_jadwal_akad;

        $BiodataJadwalResepsi = BiodataJadwalResepsi::create([
            'tanggal_resepsi' => $request->tanggal_resepsi,
            'jam_mulai_resepsi' => $request->jam_mulai_resepsi,
            'waktu_wilayah_resepsi' => $request->waktu_wilayah_resepsi,
            'lokasi_resepsi' => $request->lokasi_resepsi,
        ]);
        // mengambil id jadwal Resepsi
        $IdJadwalResepsi = $BiodataJadwalResepsi->id_jadwal_resepsi;

        $BiodataJadwalResepsi2 = BiodataJadwalResepsi2::create([
            'tanggal_resepsi_2' => $request->tanggal_resepsi_2,
            'jam_mulai_resepsi_2' => $request->jam_mulai_resepsi_2,
            'waktu_wilayah_resepsi_2' => $request->waktu_wilayah_resepsi_2,
            'lokasi_resepsi_2' => $request->lokasi_resepsi_2,
        ]);
        // mengambil id resepsi2
        $IdJadwalResepsi2 = $BiodataJadwalResepsi2->id_jadwal_resepsi2;

        if ($request->file('musik1')) {
            $musik1 = time();
            // Upload file dengan Helpers Laravel
            $audio1 = uploadImage($request->file('musik1'), 'user_page/template/public/biodata_pelanggan/musik/', $musik1);
            $BiodataMusik = new BiodataMusik;
            $BiodataMusik->musik = $audio1;
            $BiodataMusik->save();
            // mengambil id Biodata Musik
            $IdBiodataMusik = $BiodataMusik->id_musik;
        }

        $BiodataPelanggan = BiodataPelanggan::create([
            'nomor_telepon' => $request->nomor_telepon,
            'nama_instagram' => $request->nama_instagram,
            'id_user' => Auth::user()->id,
            'id_biodata_home_page' => $IdhomePage,
            'id_kutipan_ayat' => $IdKutipanAyat,
            'id_pasangan_pria' => $IdPasanganPria,
            'id_pasangan_wanita' => $IdPasanganWanita,
            'id_jadwal_akad' => $IdJadwalAkad,
            'id_jadwal_resepsi' => $IdJadwalResepsi,
            'id_jadwal_resepsi_2' => $IdJadwalResepsi2,
            'id_musik' => $IdBiodataMusik,
        ]);
        // mengambil id Biodata Pelanggan
        $IdBiodataPelanggan = $BiodataPelanggan->id_biodata_pelanggan;

        // insert data ke database pemesanan
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        $previewTemplatePemesanan = DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->first();
        $PemesananInvitation = PemesananInvitation::create([
            'id_template' => $previewTemplatePemesanan->id_template,
            'id_biodata_pelanggan' => $IdBiodataPelanggan,
            'kategori_template' => $kategori,
            'email' => Auth::User()->email,
            'link_hosting' => $request->link_hosting,
            'tanggal_pemesanan' => $tgl,
        ]);
        // mengambil id Biodata Pemesanan
        $IdPemesananInvitation = $PemesananInvitation->id_pemesanan;

        $detailPreviewTemplate = DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->get();
        foreach ($detailPreviewTemplate as $detailPreview) {
            DetailPemesananInvitation::create([
                'id_pemesanan' => $IdPemesananInvitation,
                'file_template' => $detailPreview->file_template,
                'isActive' => $detailPreview->isActive,
                'keterangan_file' => $detailPreview->keterangan_file,
            ]);
        }
        // DB::table('pesanan')->where('id_user', '=', Auth::user()->id)->delete();
        DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();
        DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();


        return response()->json([
            "success" => "Data berhasil Disimpan",
        ]);
    }

    public function data_undangan_store_premium(Request $request, $kategori)
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
            'link_hosting' => 'required|unique:pemesanan_invitation,link_hosting',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        $BiodataHomePage = BiodataHomePage::create([
            'title' => $request->title,
            'nama_panggilan_pria' => $request->nama_panggilan_pria,
            'nama_panggilan_wanita' => $request->nama_panggilan_wanita,
            'kata_pembuka' => $request->kata_pembuka,
        ]);
        // mengambil id home page
        $IdhomePage = $BiodataHomePage->id_biodata_home_page;

        $BiodataKutipanAyat = BiodataKutipanAyat::create([
            'kutipan_ayat' => $request->kutipan_ayat,
        ]);
        // mengambil id Kutipan Ayat
        $IdKutipanAyat = $BiodataKutipanAyat->id_kutipan_ayat;

        $BiodataPasanganPria = BiodataPasanganPria::create([
            'nama_lengkap_pria' => $request->nama_lengkap_pria,
            'putra_dari' => $request->putra_dari,
            'nama_bapak_pria' => $request->nama_bapak_pria,
            'nama_ibu_pria' => $request->nama_ibu_pria,
        ]);
        // mengambil id biodata pasangan pria
        $IdPasanganPria = $BiodataPasanganPria->id_pasangan_pria;

        $BiodataPasanganWanita = BiodataPasanganWanita::create([
            'nama_lengkap_wanita' => $request->nama_lengkap_wanita,
            'putri_dari' => $request->putri_dari,
            'nama_bapak_wanita' => $request->nama_bapak_wanita,
            'nama_ibu_wanita' => $request->nama_ibu_wanita,
        ]);
        // mengambil id pasangan wanita
        $IdPasanganWanita = $BiodataPasanganWanita->id_pasangan_wanita;

        $BiodataJadwalAkad = BiodataJadwalAkad::create([
            'tanggal_akad' => $request->tanggal_akad,
            'jam_mulai_akad' => $request->jam_mulai_akad,
            'waktu_wilayah_akad' => $request->waktu_wilayah_akad,
            'lokasi_akad' => $request->lokasi_akad,
        ]);
        // mengambil id jadwal akad
        $IdJadwalAkad = $BiodataJadwalAkad->id_jadwal_akad;

        $BiodataJadwalResepsi = BiodataJadwalResepsi::create([
            'tanggal_resepsi' => $request->tanggal_resepsi,
            'jam_mulai_resepsi' => $request->jam_mulai_resepsi,
            'waktu_wilayah_resepsi' => $request->waktu_wilayah_resepsi,
            'lokasi_resepsi' => $request->lokasi_resepsi,
        ]);
        // mengambil id jadwal Resepsi
        $IdJadwalResepsi = $BiodataJadwalResepsi->id_jadwal_resepsi;

        $BiodataJadwalResepsi2 = BiodataJadwalResepsi2::create([
            'tanggal_resepsi_2' => $request->tanggal_resepsi_2,
            'jam_mulai_resepsi_2' => $request->jam_mulai_resepsi_2,
            'waktu_wilayah_resepsi_2' => $request->waktu_wilayah_resepsi_2,
            'lokasi_resepsi_2' => $request->lokasi_resepsi_2,
        ]);
        // mengambil id resepsi2
        $IdJadwalResepsi2 = $BiodataJadwalResepsi2->id_jadwal_resepsi2;

        $BiodataKeluargaBesarPria = BiodataKeluargaBesarPria::create([
            'mengundang_pria' => $request->mengundang_pria,
            'nama_keluarga_pria' => $request->nama_keluarga_pria,
        ]);
        // mengambil id Keluarga Besar Pria
        $IdKeluargaBesarPria = $BiodataKeluargaBesarPria->id_keluarga_besar_pria;

        $BiodataKeluargaBesarWanita = BiodataKeluargaBesarWanita::create([
            'mengundang_wanita' => $request->mengundang_wanita,
            'nama_keluarga_wanita' => $request->nama_keluarga_wanita,
        ]);
        // mengambil id Keluarga Besar Wanita
        $IdKeluargaBesarWanita = $BiodataKeluargaBesarWanita->id_keluarga_besar_wanita;

        if ($request->musik) {
            $BiodataMusik = BiodataMusik::create([
                'musik' => $request->musik,
            ]);
            // mengambil id Biodata Musik
            $IdBiodataMusik = $BiodataMusik->id_musik;
        }
        // $IdBiodataMusik = $BiodataMusik->id_musik;

        if ($request->file('musik1')) {
            $musik1 = time();
            // Upload file dengan Helpers Laravel
            $audio1 = uploadImage($request->file('musik1'), 'user_page/template/public/biodata_pelanggan/musik/', $musik1);
            $BiodataMusik = new BiodataMusik;
            $BiodataMusik->musik = $audio1;
            $BiodataMusik->save();
            // mengambil id Biodata Musik
            $IdBiodataMusik = $BiodataMusik->id_musik;
        }

        $BiodataPelanggan = BiodataPelanggan::create([
            'nomor_telepon' => $request->nomor_telepon,
            'nama_instagram' => $request->nama_instagram,
            'id_user' => Auth::user()->id,
            'id_biodata_home_page' => $IdhomePage,
            'id_kutipan_ayat' => $IdKutipanAyat,
            'id_pasangan_pria' => $IdPasanganPria,
            'id_pasangan_wanita' => $IdPasanganWanita,
            'id_jadwal_akad' => $IdJadwalAkad,
            'id_jadwal_resepsi' => $IdJadwalResepsi,
            'id_jadwal_resepsi_2' => $IdJadwalResepsi2,
            'id_keluarga_besar_pria' => $IdKeluargaBesarPria,
            'id_keluarga_besar_wanita' => $IdKeluargaBesarWanita,
            'id_musik' => $IdBiodataMusik,
        ]);
        // mengambil id Biodata Pelanggan
        $IdBiodataPelanggan = $BiodataPelanggan->id_biodata_pelanggan;

        // insert data ke database pemesanan
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        $previewTemplatePemesanan = DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->first();
        $PemesananInvitation = PemesananInvitation::create([
            'id_template' => $previewTemplatePemesanan->id_template,
            'id_biodata_pelanggan' => $IdBiodataPelanggan,
            'kategori_template' => $kategori,
            'email' => Auth::User()->email,
            'link_hosting' => $request->link_hosting,
            'tanggal_pemesanan' => $tgl,
        ]);
        // mengambil id Biodata Pemesanan
        $IdPemesananInvitation = $PemesananInvitation->id_pemesanan;

        $detailPreviewTemplate = DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->get();
        foreach ($detailPreviewTemplate as $detailPreview) {
            DetailPemesananInvitation::create([
                'id_pemesanan' => $IdPemesananInvitation,
                'file_template' => $detailPreview->file_template,
                'isActive' => $detailPreview->isActive,
                'keterangan_file' => $detailPreview->keterangan_file,
            ]);
        }
        DB::table('preview_template_pemesanan')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();

        DB::table('detail_preview_template')->where('id_preview_template_pemesanan', $request->IdpreviewTemplate)->delete();


        return response()->json(["success" => "Data berhasil Disimpan"]);
    }
}
