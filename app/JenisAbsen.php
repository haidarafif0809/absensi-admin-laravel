<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class JenisAbsen extends Model
{
	use AuditableTrait;
	protected $fillable = ['nama','jam_masuk','jam_pulang'];
	protected $table = 'jenis_absen';
}
