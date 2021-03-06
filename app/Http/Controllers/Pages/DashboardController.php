<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Parkir;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $parkir = DB::table('parkirs')
         ->join('blok_parkirs','parkirs.blok_parkir_id','blok_parkirs.id')
         ->join('lantai_parkirs','blok_parkirs.lantai_id','lantai_parkirs.id')
         ->where('hapus',0)
         ->groupBy('blok_parkirs.lantai_id')
         ->select(array('parkirs.*','blok_parkirs.*','lantai_parkirs.*', DB::raw('COUNT(parkirs.kendaraan_id) as kendaraan')))
         ->get();
         // dd($parkir);
         return view('pages.dashboard.index',['title' => 'Dashboard','parkir' => $parkir]);
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
        //
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
