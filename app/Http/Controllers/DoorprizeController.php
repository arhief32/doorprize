<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doorprize;

class DoorprizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doorprizes = Doorprize::where('status', 0)->get();
        
        return view('doorprize', [
            'doorprizes' => $doorprizes
        ]);
    }
    
    public function indexAPI()
    {
        return Doorprize::where('status', 0)->inRandomOrder()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doorprize_number = $id;
        $status = 1;
        $jenis_menang = 'motor';

        Doorprize::where('doorprize_number', $doorprize_number)
        ->update([
            'status' => $status,
            'jenis_menang' => $jenis_menang,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
