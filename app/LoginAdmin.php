<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\Auditable\AuditableTrait;
use Illuminate\Support\Facades\DB;
use Auth;

class LoginAdmin extends Model
{
	use AuditableTrait;
	protected $fillable = ['username','password'];
	protected $table = 'loginadmin';
}
