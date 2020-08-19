<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable =['nik','nama','jenis_kelamin','alamat','no_hp','email','user_id','password'];
}
