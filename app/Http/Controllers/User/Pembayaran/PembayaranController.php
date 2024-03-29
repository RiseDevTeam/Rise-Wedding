<?php

namespace App\Http\Controllers\User\Pembayaran;

use Illuminate\Http\Request;
use App\Models\TemplateInvitation;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\TemplateInvitation\PemesananTemplate;
use App\Models\PembayaranInvitation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\RincianKetegoriTemplate;
use Illuminate\Support\Facades\Validator;
use App\Models\DetailPembayaranInvitation;

class PembayaranController extends Controller
{
    public function pembayaran_template($idPemesanan)
    {
        // decrypt id yang kita encripsi sebelumnya
        $idTemplate = Crypt::decrypt($idPemesanan);
        $TemplateInvitation = PemesananInvitation::leftjoin('template_invitation', 'pemesanan_invitation.id_template', '=', 'template_invitation.id_template')
            ->leftjoin('kategori_template', 'template_invitation.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->leftjoin('rincian_kategori_template', 'kategori_template.id_kategori_template', '=', 'rincian_kategori_template.id_kategori')
            ->where('pemesanan_invitation.id_pemesanan', $idTemplate)
            ->select('template_invitation.id_template', 'kategori_template.id_kategori_template', 'kategori_template.kategori', 'kategori_template.harga', 'rincian_kategori_template.rincian_kategori_template')->first();
        // menampilkan kategori template pada halaman utama

        $RincianKetegoriTemplate =  RincianKetegoriTemplate::where('id_kategori', $TemplateInvitation->id_kategori_template)->get();

        return view('frontend.pembayaran.pembayaran_template', compact('TemplateInvitation', 'RincianKetegoriTemplate'));
    }

    public function pembayaran_template_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'buktiPembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('buktiPembayaran')) {
            $buktiPembayaran = time();
            // Upload file dengan Helpers Laravel
            $gambarBukti = uploadImage($request->file('buktiPembayaran'), 'user_page/template/public/bukti_pembayaran/', $buktiPembayaran);
        }
        // menampilkan data pemesanan terakhir oleh user
        $PemesananInvitation = PemesananInvitation::where('email', Auth::User()->email)->orderBy('id_pemesanan', 'desc')->first();

        // insert data ke database pembayaran
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        $y = date('Y');
        $m = date('m');
        $d = date('d');
        $id_user = Auth::User()->id;
        $kode_transaksi = $y . $m . $d . $id_user;

        $PembayaranInvitation = PembayaranInvitation::create([
            'id_pemesanan' => $PemesananInvitation->id_pemesanan,
            'tanggal_pembayaran' => $tgl,
        ]);
        // mengambil id Pembayaran Invitation
        $IdPembayaranInvitation = $PembayaranInvitation->id_pembayaran;
        DetailPembayaranInvitation::create([
            'id_pembayaran' => $IdPembayaranInvitation,
            'tipe_pembayaran' => 'Transfer',
            'kode_transaksi' => $kode_transaksi,
            'total' => $request->total,
            'bukti_pembayaran' => $gambarBukti,
        ]);

        $PemesananInvitation->status = 'sudah bayar';
        $PemesananInvitation->save();

        return response()->json(["success" => "Data berhasil Disimpan"]);
    }
}
