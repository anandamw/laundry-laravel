<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentModel extends Model
{
    use HasFactory;
    protected $table = 'master_payment';
    protected $guarded = ['id'];

    // public static function getAllDataStatus__(){
    //          $query = DB::table('master_payment')->join('users', 'master_payment.users_id', '=', 'master_payment.users_id')->get();
    //          return $query; 
    // }
}
