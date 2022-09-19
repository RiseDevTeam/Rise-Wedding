<?php

namespace App\Http\Controllers\Admin\Template;

use App\Models\SubKategori;
use App\Models\FileTemplate;
use Illuminate\Http\Request;
use App\Models\TemplateInvitation;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FileTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id_template_session =  Crypt::encrypt($id);
        $templateKategori = TemplateInvitation::leftjoin('sub_kategori', 'template_invitation.id_kategori', '=', 'sub_kategori.id_kategori')->where('id_template', $id)->get();
        return view('backend.admin.file_template.create', compact('templateKategori', 'id_template_session'));
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
            'idSubKategori' => 'required',
            'fileTemplate' => 'required',
            'keterangan_aktif' => 'required',
            'gambarTemplate' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }

        if ($request->file('fileTemplate')) {
            $fileTemplate = time();
            // Upload file dengan Helpers Laravel
            $file = uploadImage($request->file('fileTemplate'), 'file/file_template/', $fileTemplate);
        }

        if ($request->file('gambarTemplate')) {
            $fileName = time();
            // Upload file dengan Helpers Laravel
            $image = uploadImage($request->file('gambarTemplate'), 'gambar/gambar_template/', $fileName);
        }

        // Insert Data
        $insertData = new FileTemplate;
        $insertData->id_template = $request->idTemplate;
        $insertData->id_sub_kategori = $request->idSubKategori;
        $insertData->isActive = $request->keterangan_aktif;
        if ($request->keterangan_aktif == '1') {
            $insertData->keterangan_file = 'Aktif';
        } else {
            $insertData->keterangan_file = 'Tidak Aktif';
        }
        $insertData->file = $file;
        $insertData->gambar_template = $image;
        $insertData->save();

        return response()->json(['success' => 'File Template Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_template = Crypt::decrypt($id);
        Session::put('id_template', $id_template);
        $TemplateIndex = FileTemplate::leftjoin('sub_kategori', 'file_template.id_sub_kategori', '=', 'sub_kategori.id_sub_kategori')->leftjoin('kategori_template', 'sub_kategori.id_kategori', '=', 'kategori_template.id_kategori_template')
            ->leftjoin('template_invitation', 'file_template.id_template', '=', 'template_invitation.id_template')
            ->select('file_template.id_file_template', 'file_template.file', 'file_template.gambar_template', 'file_template.isActive', 'file_template.keterangan_file', 'sub_kategori.icon', 'kategori_template.kategori', 'template_invitation.id_template')->where('template_invitation.id_template', $id_template)->paginate(10);
        return view('backend.admin.file_template.index', compact('TemplateIndex', 'id_template', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = FileTemplate::leftjoin('sub_kategori', 'file_template.id_sub_kategori', '=', 'sub_kategori.id_sub_kategori')->where('id_file_template', $id)
            ->select(
                'sub_kategori.id_sub_kategori',
                'sub_kategori.keterangan',
                'sub_kategori.icon',
                'file_template.id_file_template',
                'file_template.id_template',
                'file_template.file',
                'file_template.isActive as keterangan_aktif',
                'file_template.gambar_template',
            )->first();
        $templateKategori = TemplateInvitation::leftjoin('sub_kategori', 'template_invitation.id_kategori', '=', 'sub_kategori.id_kategori')->where('id_template', $edit->id_template)->get();
        return view('backend.admin.file_template.edit', compact('templateKategori', 'edit'));
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
        // FileTemplate::where('id_file_template', $id)->update([
        //     'id_sub_kategori' => $request->idSubKategori,
        //     'isActive' => $request->keterangan_aktif,
        // ]);

        $update = FileTemplate::where('id_file_template', $id)->first();
        $update->id_sub_kategori = $request->idSubKategori;
        $update->isActive = $request->keterangan_aktif;
        if ($request->keterangan_aktif == '1') {
            $update->keterangan_file = 'Aktif';
        } else {
            $update->keterangan_file = 'Tidak Aktif';
        }
        $update->save();

        if ($request->file('fileTemplate')) {
            $fileTemplate = time();
            // Upload file dengan Helpers Laravel
            $file = uploadImage($request->file('fileTemplate'), 'file/file_template/', $fileTemplate);

            // delete gambar awal ketika di update gambar baru
            $fileTemplate = FileTemplate::findOrFail($id);
            File::delete(public_path() . '/file/file_template/' . $fileTemplate->file);

            // update data
            FileTemplate::where('id_file_template', $id)->update([
                'file' => $file,
            ]);
        }

        if ($request->file('gambarTemplate')) {
            $gambarName = time();
            // Upload file dengan Helpers Laravel
            $image = uploadImage($request->file('gambarTemplate'), 'gambar/gambar_template/', $gambarName);

            // delete gambar awal ketika di update gambar baru
            $gambarTemplate = FileTemplate::findOrFail($id);
            File::delete(public_path() . '/gambar/gambar_template/' . $gambarTemplate->gambar_template);

            // update data
            FileTemplate::where('id_file_template', $id)->update([
                'gambar_template' => $image,
            ]);
        }

        return response()->json(['success' => 'File Template Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = FileTemplate::where('id_file_template', $id)->first();
        File::delete(public_path() . '/file/file_template/' . $delete->file);
        File::delete(public_path() . '/gambar/gambar_template/' . $delete->gambar_template);
        $delete->delete();
        return response()->json(['success' => 'File Template Berhasil Dihapus']);
    }

    public function kategori_template(Request $request)
    {
        $kategoriTemplateIcon = SubKategori::where('id_sub_kategori', $request->idSubKategori)
            ->select('sub_kategori.keterangan', 'sub_kategori.id_sub_kategori', 'sub_kategori.icon')->first();

        return response()->json($kategoriTemplateIcon);
    }
}
