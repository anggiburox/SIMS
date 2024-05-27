<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\profilModel;
use App\Models\LeaderModel;
use Illuminate\Support\Facades\DB;

class ProfileControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {   
        // $pgw = profilModel::get();
        return view('pages/admin/profil/index',
		
		// ['pgw' => $pgw]
	);
    }

	
    public function tambah(){
		// $kode = profilModel::kode();
        return view('pages/admin/profil/tambah', 
		// ['kode'=>$kode]
	);
    }

    public function store(Request $request){

	// insert data ke table profil
	DB::table('profil')->insert([
		'ID_profil' => $request->id_profil,
		'Nama_profil' => $request->nama_profil,
	]);

	// alihkan halaman ke halaman profil
	return redirect('/admin/profil/')->withSuccess('Data berhasil disimpan');
    }

    public function edit($id)
	{
		// mengambil data keberangkatan berdasarkan id yang dipilih
		$pgw = DB::table('profil')
		->where('ID_profil',$id)
		->get();
		// passing data keberangkatan yang didapat ke view edit.blade.php
		return view('pages/admin/profil/edit',['pgw' => $pgw]);
	}

	// update data profil
	public function update(Request $request){
		// update data profil
		DB::table('profil')->where('ID_profil',$request->id_profil)->update([
			'Nama_profil' => $request->nama_profil,
        ]);
		
		
		// alihkan halaman ke halaman profil
		return redirect('/admin/profil')->withSuccess('Data berhasil diperbaharui');
    }

	public function hapus($id){
   
        // Menghapus data profil dari tabel
        DB::table('profil')->where('ID_profil', $id)->delete();
		// Alihkan halaman ke halaman profil jika tidak ada data profil dengan ID tersebut
		return redirect('/admin/profil')->withDanger('Data profil tidak ditemukan');
	}

	
}