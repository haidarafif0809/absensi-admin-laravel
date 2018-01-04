<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class LokasiAbsen extends Model
{
	use AuditableTrait;
	protected $fillable = ['latitude_absen','longitude_absen','nama','batas_jarak_absen'];
	protected $table = 'lokasi_absen';
}
