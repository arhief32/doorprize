<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doorprize;

class SepedaGowesController extends Controller
{
    public function index()
    {
        $sepeda_gowes = Doorprize::where([
            // ['status', 0],
            ['status', 1],
            ['jenis_menang', 'sepeda gowes']
        ])->limit(20)->get();

        return view('03_sepeda_gowes', [
            'sepeda_gowes' => $sepeda_gowes
        ]);
    }

    public function indexAPI()
    {
        $sepeda_gowes = Doorprize::where('status', 0)->inRandomOrder()->get();

        $sulut = [];
        $non_sulut = [];

        foreach($sepeda_gowes as $row)
        {
            $calon_pemenang = substr($row['doorprize_name'], -4);

            if($calon_pemenang <= 1020)
            {
                array_push($sulut, $row);
            } else {
                array_push($non_sulut, $row);
            }
        }

        $sulut = array_slice($sulut, -30);
        $non_sulut = array_slice($non_sulut, -70);

        $array_result = array_merge($sulut, $non_sulut);

        return response()->json($array_result);
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
                'jenis_menang' => 'sepeda gowes',
            ]);
        }
    }

    public function reset()
    {
        $sepeda_gowes = Doorprize::where('status', 1)
        ->where('jenis_menang', 'sepeda gowes')
        ->update([
            'status' => 0,
            'jenis_menang' => NULL,
        ]);
    }
}
