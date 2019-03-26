<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

//rbac权限
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class Admin extends Authenticatable
{
    //
    protected $table = 'admins';
	//rbac权限
	use HasRoles;
}
