<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Pegawai extends Model
{

     protected $table = 'tbl_pegawai';
    protected $fillable = ['nik','nama_lengkap','jenis_kelamin','tgl_lahir','alamat','negara'];
}
