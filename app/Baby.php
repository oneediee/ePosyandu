<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    protected $fillable =['nik','nama','jenis_kelamin','tanggal_lahir','berat_badan','tinggi_badan','nama_ibu'];
}
