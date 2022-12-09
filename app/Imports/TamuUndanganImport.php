<?php

namespace App\Imports;

use App\Models\TamuUndangan;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class TamuUndanganImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        return new TamuUndangan([
            'nama_tamu' => $row[1],
            'whatsapp' => $row[2],
            'alamat' => $row[3],
            'email' => Auth::User()->email,
        ]);
    }

    public function startRow(): int
    {
        return 3;
    }
}
