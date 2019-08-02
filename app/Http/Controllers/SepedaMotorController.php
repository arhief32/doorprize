<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doorprize;

class SepedaMotorController extends Controller
{
    public function index()
    {
        $sepeda_motor = Doorprize::where([
            // ['status', 0],
            ['status', 1],
            ['jenis_menang', 'sepeda motor']
        ])->limit(100)->get();

        return view('06_sepeda_motor', [
            'sepeda_motor' => $sepeda_motor
        ]);
    }

    public function update(Request $request)
    {
        // return $request->all();
        $list_pemenang = $request['array_doorprize'];

        foreach($list_pemenang as $pemenang)
        {
            Doorprize::where('doorprize_number', $pemenang['doorprize_number'])
            ->update([
                'status' => 1,
                'jenis_menang' => 'sepeda motor',
            ]);
        }
    }

    public function reset()
    {
        $sepeda_motor = Doorprize::where('status', 1)
        ->where('jenis', 'sepeda motor')
        ->update([
            'status' => 0,
            'jenis_menang' => NULL,
        ]);
    }
}
