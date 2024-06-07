<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AksesModel extends Model
{
    use HasFactory;
    protected $table = 'master_akses';
    protected $guarded = ['id'];

    
    // public static function getAllDataRelationships__(){
    //     $query = DB::table('master_akses')->join('users', 'master_akses.users_id', '=' , 'users.id')->get();
    //     return $query;
    // }
}
