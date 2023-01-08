<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pegawai;
use Illuminate\Support\Facades\Http;


class PegawaiController extends Controller
{
    public function list(request $request)

    {
        $pegawai = Pegawai::get();
        return view('pegawai/list_pegawai',['pegawai'=> $pegawai]);

    }

     public function add()
    {

        $pegawai = Pegawai::get();
        return view('pegawai/add_pegawai');    
    }
    
    public function save(request $request)
    {
            $pegawai = new Pegawai([
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'negara' => $request->negara
            
        ]);
        $pegawai->save($request->all());


        return redirect('pegawai')->with('status','pegawai berhasil ditambah!');
    }


    
     public function edit($nik)
    {
        $pegawai = Pegawai::get();
        $pegawai = Pegawai::where('nik', $nik)->first();  

        return view('pegawai/edit_pegawai');  
    }
    public function editProcess(Request $request, $nik)
    {
            $pegawai =  Pegawai::findOrFail($nik);
            $pegawai->nik = $request->nik;
            $pegawai->nama_lengkap = $request->nama_lengkap;
            $pegawai->jenis_kelamin = $request->jenis_kelamin;
            $pegawai->tgl_lahir = $request->tgl_lahir;
            $pegawai->alamat = $request->alamat;
            $pegawai->negara = $request->negara;
            $pegawai->update();

        return redirect('pegawai')->with('status','pegawai berhasil diupdate!');
    }

  public function delete($id)
    {
      $pegawai = Pegawai::findOrFail($id);
      $pegawai->delete();

       // return redirect('program')->with('success', 'program deleted!');
        return redirect('pegawai')->with('status','pegawai berhasil dihapus!');

}
}



