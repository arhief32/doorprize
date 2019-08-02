<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doorprize;

class SmartPhoneController extends Controller
{
    public function index()
    {
        $smartphone = Doorprize::where([
            // ['status', 0],
            ['status', 1],
            ['jenis_menang', 'smartphone']
        ])->limit(20)->get();

        return view('05_smartphone', [
            'smartphone' => $smartphone
        ]);
    }

    public function indexAPI()
    {
        $smartphone = Doorprize::where('status', 0)->inRandomOrder()->limit(10)->get();

        // $sulut = [];
        // $non_sulut = [];

        // foreach($sepeda_motor as $row)
        // {
        //     $calon_pemenang = substr($row['doorprize_name'], -4);

        //     if($calon_pemenang <= 1020)
        //     {
        //         array_push($sulut, $row);
        //     } else {
        //         array_push($non_sulut, $row);
        //     }
        // }

        // $sulut = array_slice($sulut, -10);
        // $non_sulut = array_slice($non_sulut, -10);

        // $array_result = array_merge($sulut, $non_sulut);

        return response()->json($smartphone);
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
                'jenis_menang' => 'smartphone',
            ]);
        }
    }

    public function reset()
    {
        $sepeda_motor = Doorprize::where('status', 1)
        ->where('jenis_menang', 'smartphone')
        ->update([
            'status' => 0,
            'jenis_menang' => NULL,
        ]);
    }
}
