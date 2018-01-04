<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class sakit extends Model
{

	use AuditableTrait;
	protected $fillable = ['nik','nama','password','mulai_sakit','selesai_sakit','gambar','keterangan','tanggal'];
	protected $table = 'sakit';
}
