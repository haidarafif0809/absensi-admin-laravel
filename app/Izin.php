<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class Izin extends Model
{
	use AuditableTrait;
	protected $fillable = ['nik','nama','password','mulai_izin','selesai_izin','gambar','keterangan','tanggal','foto'];
	protected $table = 'izin';
}
