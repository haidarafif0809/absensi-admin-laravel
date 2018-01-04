<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class presensi extends Model
{
	use AuditableTrait;
	protected $fillable = ['nik','nama','jam_masuk','jam_pulang','jam_mulai_istirahat','jam_selesai_istirahat','tanggal_masuk','tanggal_pulang','waktu_masuk','waktu_pulang','jam_kerja','jam_lembur','gambar','gambar_pulang','lokasi_absen_masuk','lokasi_absen_pulang','latitude_masuk','latitude_pulang','longitude_masuk','longitude_pulang','keterangan_masuk','keterangan_pulang'];	
	protected $table = 'presensi';


}
