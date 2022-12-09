<?php

namespace App\Http\Controllers\User\TamuUndangan;

use Illuminate\Http\Request;
use App\Imports\TamuUndanganImport;
use App\Models\PemesananInvitation;
use App\Http\Controllers\Controller;
use App\Models\TamuUndangan;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class TamuUndanganController extends Controller
{
    public function tamu_undangan($link_hosting)
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
        $data_tamu = TamuUndangan::select('id_biodata_tamu_undangan', 'id_pemesanan', 'nama_tamu', 'whatsapp', 'alamat', 'email')
            ->where('id_pemesanan', '=', $hostingan->id_pemesanan)
            ->paginate(6);
        // dd($data_tamu);
        return view('frontend.tamu_undangan.data_tamu', compact('hostingan', 'data_tamu'));
    }

    public function tamu_undangan_store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_tamu' => 'required',
            'email' => 'required|email',
            'no_wa' => 'required|max:12',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }
        TamuUndangan::create([
            'id_pemesanan' => $request->id_pemesanan,
            'nama_tamu' => $request->nama_tamu,
            'email' => $request->email,
            'whatsapp' => $request->no_wa,
            'alamat' => $request->alamat,
        ]);

        return response()->json(['success' => 'Nama Tamu Berhasil Disimpan']);
    }

    public function tamu_undangan_edit(Request $request)
    {
        // dd($request->id_biodata);

        $edit_tamu =  TamuUndangan::where('id_biodata_tamu_undangan', $request->id_biodata)->first();
        return response()->json($edit_tamu);
    }

    public function tamu_undangan_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_tamu_edit' => 'required',
            'email_edit' => 'required|email',
            'no_wa_edit' => 'required|max:12',
            'alamat_edit' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        TamuUndangan::where('id_biodata_tamu_undangan', $request->id_biodata)
            ->update([
                'nama_tamu' => $request->nama_tamu_edit,
                'email' => $request->email_edit,
                'whatsapp' => $request->no_wa_edit,
                'alamat' => $request->alamat_edit,
            ]);

        return response()->json(['success' => 'Tamu Berhasil Diupdate']);
    }

    public function share_tamu(Request $request)
    {
        return
            TamuUndangan::where('id_biodata_tamu_undangan', $request->id_tamu)->first();
        // return response()->json(['success' => 'Tamu Berhasil Diupdate']);
    }

    public function import_tamu_undangan(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = time() . rand(1, 100) . '.' . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('exel', $nama_file);
        // import data
        Excel::import(new TamuUndanganImport, public_path('/exel/' . $nama_file));

        return response()->json([
            "success" => "Data berhasil Disimpan",
        ]);
    }
}
