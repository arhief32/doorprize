<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doorprize;

class VoucherBelanjaController extends Controller
{
    public function index()
    {
        $voucher_belanja = Doorprize::where([
            // ['status', 0],
            ['status', 1],
            ['jenis_menang', 'Voucher Belanja']
        ])->limit(100)->get();

        return view('01_voucher_belanja', [
            '$voucher_belanja' => $voucher_belanja
        ]);
    }

    public function update($nomor)
    {
        Doorprize::where('doorprize_number', $nomor)
        ->update([
            'status' => 1,
            'jenis_menang' => 'Voucher Belanja',
        ]);
    }

    public function reset()
    {
        $voucher_belanja = Doorprize::where('status', 1)
        ->where('jenis', 'Voucher Belanja')
        ->update([
            'status' => 0,
            'jenis_menang' => NULL,
        ]);
    }
}
