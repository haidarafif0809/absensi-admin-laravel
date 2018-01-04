<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class DaftarKaryawan extends Model
{
	use AuditableTrait;
	protected $fillable = ['nik','nama','password','jabatan','alamat','no_hp','pertanyaan','jawaban','waktu_presensi','status','tipe_user'];
	protected $table = 'daftar_karyawan';

}
