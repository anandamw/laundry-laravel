<?php

namespace App\Http\Controllers;

use App\Models\PaymentModel;
use Illuminate\Http\Request;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\ValidatedData;

class PaymentController extends Controller
{
    public function index(){
        $datas = [
          "dataPayments" => PaymentModel::all(),
        ] ;

        return view('admin.payments.payment', $datas);
    }

    public function create(){

        $datas = [
            "dataPayments" => PaymentModel::all(),
        ];
          
        return view('admin.payments.tambah', $datas);
    }

    public function create_action(Request $request){
        // dd($request->all());
        $token = uniqid();
        $nama_pemesanan = $request->nama_pemesanan;
        $nomer_pemesanan = $request->nomer_pemesanan;
        $email_pemesanan = $request->email_pemesanan;
        $status_pembelian = $request->status_pembelian; 
        
        $data  = [
            "token_payment" => $token,
            "nama_pemesanan" => $nama_pemesanan,
            "nomer_pemesanan" => $nomer_pemesanan,
            "email_pemesanan" => $email_pemesanan,
            "status_pembelian" => $status_pembelian,
        
        ];  
        
        PaymentModel::create($data);
        return view('admin.payments.payment');
    }


    public function update($id){

        $data = PaymentModel::where('id', $id)->first();
        return view('admin.payments.update', compact('data'));
    }
    public function update_action(Request $request , $id ){
        $token = uniqid();
        $users_id = $request->users_id;
        $status_pembelian = $request->status_pembelian; 
        $waktu_pemesanan = $request->waktu_pemesanan;
        $waktu_transaksi = $request->waktu_transaksi;

        $data  = [
            "users_id" => $users_id,
            "token_payment" => $token,
            "status_pembelian" => $status_pembelian,
            "waktu_pemesanan" => $waktu_pemesanan,
            "waktu_transaksi" => $waktu_transaksi
        ];  

        PaymentModel::where('id', $id)->update( $data);
        return view('admin.payments.update');
    }

    public function delete($id){

        PaymentModel::where('id', $id)->delete();
        return view('admin.payments.payment');
    }


}
