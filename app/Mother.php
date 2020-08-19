<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $fillable =['nik','nama','jenis_kelamin','alamat','no_hp','nama_anak','email','password'];
}
