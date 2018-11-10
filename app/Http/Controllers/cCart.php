<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\mSanpham;
class cCart extends Controller
{
    public function getAdd($id){
        // $sanpham = mSanpham::find($id);
        // Cart::add(['id' => $id, 'name' => $sanpham->tensp, 'qty' => 1, 'price' => $sanpham->giasp, 'options' => ['img' => $sanpham->img]]);
        // return back();
        $data = Cart::content();
        dd($data);
    }
}
