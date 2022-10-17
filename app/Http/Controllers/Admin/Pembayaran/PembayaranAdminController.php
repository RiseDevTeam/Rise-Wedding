<?php

namespace App\Http\Controllers\Admin\Pembayaran;

http://www.w3.org/2000/svg
use App\Http\Controllers\Controller;
use Carbon;

class PembayaranAdminController extends Controller
{

    public function index()
    {
        $dataPembayaranInvitation = PembayaranInvitation::leftjoin('pemesanan_invitation', 'pemesanan_invitation.id_pemesanan', '=', 'pembayaran_invitation.id_pemesanan')
            ->leftjoin('biodata_pelanggan', 'biodata_pelanggan.id_biodata_pelanggan', '=', 'pemesanan_invitation.id_biodata_pelanggan')
            ->leftjoin('users', 'users.id', '=', 'biodata_pelanggan.id_user')
            ->leftjoin('detail_pemesanan_invitation', 'detail_pemesanan_invitation.id_pemesanan', '=', 'pemesanan_invitation.id_pemesanan')
            ->leftjoin('detail_pembayaran_invitation', 'detail_pembayaran_invitation.id_pembayaran', '=', 'pembayaran_invitation.id_pembayaran')
            ->leftjoin('template_invitation', 'template_invitation.id_template', '=', 'pemesanan_invitation.id_template')
            ->leftjoin('biodata_pasangan_pria', 'biodata_pasangan_pria.id_pasangan_pria', '=', 'biodata_pelanggan.id_pasangan_pria')
            ->leftjoin('biodata_pasangan_wanita', 'biodata_pasangan_wanita.id_pasangan_wanita', '=', 'biodata_pelanggan.id_pasangan_wanita')
            ->leftjoin('kategori_template', 'kategori_template.id_kategori_template', '=', 'template_invitation.id_kategori')
            ->select(
                'pembayaran_invitation.id_pembayaran',
                'detail_pembayaran_invitation.kode_transaksi',
                'users.name',
                'users.email',
                'pemesanan_invitation.kategori_template',
                'pembayaran_invitation.tanggal_pembayaran',
                'detail_pembayaran_invitation.tipe_pembayaran',
                'detail_pembayaran_invitation.bukti_pembayaran',
                'detail_pembayaran_invitation.total',
                'pembayaran_invitation.status',
                // 'pemesanan_invitation.link_hosting', 
                // 'pemesanan_invitation.tanggal_pemesanan', 
                'template_invitation.gambar_cover',
                'biodata_pasangan_pria.nama_lengkap_pria as nama_pasangan_pria',
                'biodata_pasangan_wanita.nama_lengkap_wanita as nama_pasangan_wanita',
                // 'kategori_template.harga',
            )
            ->orderBy('id_pembayaran', 'desc')
            ->groupBy('pembayaran_invitation.id_pembayaran')
            ->get();

        return view('backend.admin.pembayaran.index', compact('dataPembayaranInvitation'));
    }

    public function setujui($id)
    {
        $pembayaran = PembayaranInvitation::where('id_pembayaran', $id)->update([
            'status' => "lunas"
        ]);

        $idPesanan = PembayaranInvitation::where('id_pembayaran', $id)
            ->select('id_pemesanan')
            ->first();

        PemesananInvitation::where('id_pemesanan', $idPesanan->id_pemesanan)->update([
            'status' => "selesai"
        ]);

        return response()->json(['success' => 'Pembayaran Disetujui']);
    }

    public function tolak($id)
    {
        $pembayaran = PembayaranInvitation::where('id_pembayaran', $id)->update([
            'status' => "ditolak"
        ]);

        $idPesanan = PembayaranInvitation::where('id_pembayaran', $id)
            ->select('id_pemesanan')
            ->first();

        PemesananInvitation::where('id_pemesanan', $idPesanan->id_pemesanan)->update([
            'status' => "ditolak"
        ]);

        return response()->json(['success' => 'Pembayaran Ditolak']);
    }

    public function getNewPembayaran(){
       
        $data = PembayaranInvitation::where('status','pending')
            // ->where('tanggal_pemesanan', date("Y-m-d"))
            ->count();
       
        return response()->json($data);
    }


    public function notifikasi(){
        $now = date('Y-m-d');
        // $day = date('Y-m-d',strtotime('-1 days',strtotime($now)));
        $psn_kemaren = PemesananInvitation::where('tanggal_pemesanan','<',$now)->count();
        $psn_hariini = PemesananInvitation::where('tanggal_pemesanan',$now)->count();
        $pbr_kemaren = PembayaranInvitation::where('tanggal_pembayaran','<',$now)->count();
        $pbr_hariini = PembayaranInvitation::where('tanggal_pembayaran',$now)->count();   
        $user_kemaren = User::where('created_at','<',$now)->count();
        $user_hariini = User::where('created_at',$now)->count();   
       

        if ($psn_hariini > $psn_kemaren) {
            


        }
       return $pesan = PemesananInvitation::where('status','pending')
            ->orderBy('tanggal_pemesanan','ASC')->first();
    
            $data['pembayaran'] = PembayaranInvitation::where('status','pending')
            ->orderBy('tanggal_pembayaran','ASC')->first();
        // return($data);
 
            
            $data['user'] = User::orderBy('created_at','ASC')->first();

            // $data = ['pesan' => $pesan,
            //         'bayar' => $bayar,
            //         'user' => $user];
                $nama = "rezi";
            return view('layouts.admin',['pesan' => $pesan]);
        // return response()->json($data);


        
       
    }
}
