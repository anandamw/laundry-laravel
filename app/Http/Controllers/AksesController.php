<?php

namespace App\Http\Controllers;

use App\Models\AksesModel;
use Illuminate\Http\Request;

class AksesController extends Controller
{
    public function index(){
        $datas = [
            "dataAkses" => AksesModel::all(),
        ];
        return view('admin.akses.akses', $datas);
    }

    public function create(){

        

        return view('admin.akses.tambah');
    }
}
