<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $siswa = DB::table('siswa')
        ->where("siswa.nama", "LIKE", "%".$request->search."%")
        ->orwhere("siswa.alamat", "LIKE", "%".$request->search."%")
        ->get();
       
        


        return view('siswa0107', [
            'siswa' => $siswa
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create0107');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = siswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            
        ]);

        return redirect('siswa0107')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = siswa::findorfail($id);
        return view('edit0107', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $siswa = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ];

        siswa::whereId($id)->update($siswa);
        return redirect('siswa0107')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = siswa::findorfail($id);
        $data->delete();
        return redirect('siswa0107')->with('success', 'Data berhasil dihapus');
    }
}