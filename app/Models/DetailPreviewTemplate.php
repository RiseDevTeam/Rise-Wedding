<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPreviewTemplate extends Model
{
    use HasFactory;

    protected $table = 'detail_preview_template';

    protected $primaryKey = 'id_detail_preview';

    protected $guarded = [
        'id_detail_preview'
    ];
}
