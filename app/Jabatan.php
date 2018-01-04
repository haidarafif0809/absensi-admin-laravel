<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class Jabatan extends Model
{
	use AuditableTrait;
	protected $fillable = ['nama'];
	protected $table = 'jabatan';
}
