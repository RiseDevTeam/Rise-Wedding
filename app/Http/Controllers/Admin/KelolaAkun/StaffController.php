<?php

namespace App\Http\Controllers\Admin\KelolaAkun;

use App\Models\User;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataStaff = User::leftjoin('staff', 'users.id', '=', 'staff.id_user')->where('status', 'staff')
            ->select('users.name', 'users.email', 'users.foto', 'users.status', 'users.id', 'staff.alamat', 'staff.jenis_kelamin', 'staff.nomor_telepon',)
            ->paginate(10);
        return view('backend.admin.staff.index', compact('dataStaff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('foto')) {

            $fileName = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $image = uploadImage($request->file('foto'), 'admin/img/', $fileName);
        }
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "foto" => $image,
            "password" => Crypt::encrypt($request->password),
            "status" => 'staff',
        ]);
        $id = DB::getPDO()->lastInsertId();

        Staff::create([
            'id_user' => $id,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        return response()->json(['success' => 'Staf Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_user = Crypt::decrypt($id);
        $edit =  User::leftjoin('staff', 'users.id', '=', 'staff.id_user')->where('id', $id_user)
            ->select('users.name', 'users.email', 'users.foto', 'users.password', 'users.status', 'users.id', 'staff.alamat', 'staff.jenis_kelamin', 'staff.nomor_telepon',)
            ->first();
        return view('backend.admin.staff.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Crypt::encrypt($request->password),
        ]);

        Staff::where('id_user', $id)->update([
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        if ($request->file('foto')) {

            $fileName = time();
            // contoh untuk controllers uploadFile($request->file('file'), 'public/upload/', 'gambar123');
            $image = uploadImage($request->file('foto'), 'admin/img/', $fileName);

            $fotoStaff = User::findOrFail($id);
            // File::delete(uploadImage($request->file('gambar'), 'gambar/halaman_admin/', $fileName));
            File::delete(public_path() . '/admin/img/' . $fotoStaff->foto);

            User::where('id', $id)->update([
                'foto' => $image,
            ]);
        }
        return response()->json(['success' => 'Staff Berhasil Diupdate']);
        // dd(Crypt::encryptString($request->alamat));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::where('id_user', $id)->delete();
        $hapus = User::where('id', $id)->first();
        File::delete(public_path() . '/admin/img/' . $hapus->foto);
        $hapus->delete();
        return response()->json(["success" => "Data berhasil dihapus"]);
    }
}
