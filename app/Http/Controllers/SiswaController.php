<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ambil data siswa dari database
        // $dataSiswa = Siswa::all();
        $dataSiswa = Siswa::orderby('id', 'desc')->with(['kelas'])->get();

        $dataTemplate = [
            'dataSiswa' => $dataSiswa
        ];

        return view('siswa.index', $dataTemplate); //nama file yang dipanggil.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['dataKelas'] = Kelas::all();
        return view('siswa.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswaBaru = new Siswa;
        // isi kolom
        $siswaBaru->nama = $request->input('nama');
        $siswaBaru->alamat = $request->input('alamat');
        $siswaBaru->nim = $request->input('nim');
        $siswaBaru->kelas_id = $request->input('kelas_id');

        $siswaBaru->save();

        $request
            ->session()
            ->flash('pesan', 'Data berhasil ditambahkan');

        return redirect('/siswa');
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
       $data['siswa'] = Siswa::findOrFail($id);
       return view('siswa.edit',$data);
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
        // ambil dari db
        $siswa = Siswa::findOrFail($id);
        // set kolom
        $siswa->nama = $request->input('siswa');
        // simpan ke db
        $siswa->save();

        $request
            ->session()
            ->flash('pesan', 'Data berhasil diubbah');

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Siswa::destroy($id);

        $request
            ->session()
            ->flash('pesan', 'Data berhasil dihapus');

        return redirect('/siswa');
    }
}
