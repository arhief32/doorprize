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

        // $voucher_belanja_1 = [];
        // $voucher_belanja_2 = [];
        // $voucher_belanja_3 = [];
        // $voucher_belanja_3 = [];
        // $voucher_belanja_4 = [];
        // $voucher_belanja_5 = [];

        // $i = 0;
        // foreach($voucher_belanja as $voucher)
        // {
        //     if($i == 0 || $i < 20)
        //     {
        //         array_push($voucher_belanja_1, $voucher);
        //     }

        //     if($i == 20 || $i < 40)
        //     {
        //         array_push($voucher_belanja_2, $voucher);
        //     }

        //     if($i == 40 || $i < 60)
        //     {
        //         array_push($voucher_belanja_3, $voucher);
        //     }

        //     if($i == 60 || $i < 80)
        //     {
        //         array_push($voucher_belanja_4, $voucher);
        //     }

        //     if($i == 80 || $i < 100)
        //     {
        //         array_push($voucher_belanja_5, $voucher);
        //     }

        //     $i++;
        // }

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
