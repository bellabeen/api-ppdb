<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Http\Resources\SiswaCollection;
use App\Http\Resources\SiswaResource;
use App\Models\Siswa\Nilai;
use App\Models\Siswa\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //untuk paginate
        // $siswa = Siswa::paginate(1);

        $siswa = Siswa::get();
        return new SiswaCollection($siswa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pendaftaran' => ['required', 'min:5', 'max:255'],
            'nama_siswa' => ['required'],
            'jenis_kelamin' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required'],
            'alamat' => ['required'],
            'kelurahan' => ['required'],
            'kecamatan' => ['required'],
            'kota' => ['required'],
            'provinsi' => ['required'],
            'nama_ortu' => ['required'],
            'nomor_ortu' => ['required'],
            'nomor_nik' => ['required'],
            'nomor_kk' => ['required'],
            'status' => ['required'],
            'nisn' =>  ['required'],
            'semester_1' =>  ['required'],
            'semester_2' =>  ['required'],
            'semester_3' =>  ['required'],
            'semester_4' =>  ['required'],
            'semester_5' =>  ['required'],
        ]);

        $siswa = auth()->user()->siswa()->create($this->siswaStore());
        
        return $siswa;
        // // //Simpan Data Siswa
        // // $siswa = Siswa::create($input);

        // //Simpan Data Nilai
        // $nilai = new Nilai;
        // $nilai->nisn = $request->input('nisn');
        // $nilai->semester_1 = $request->input('semester_1');
        // $nilai->semester_2 = $request->input('semester_2');
        // $nilai->semester_3 = $request->input('semester_3');
        // $nilai->semester_4 = $request->input('semester_4');
        // $nilai->semester_5 = $request->input('semester_5');
        // $siswa->nilai()->save($nilai);    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return new SiswaResource($siswa);
        // $siswa = Siswa::where('id',$id)->get();

        // if(count($siswa) > 0){ //mengecek apakah data kosong atau tidak
        //     $res['message'] = "Success!";
        //     $res['values'] = $siswa;
        //     return response($res);
        // }
        // else{
        //     $res['message'] = "Failed!";
        //     return response($res);
        // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Siswa $siswa)
    {
        $siswa->update($this->siswaStore());
        return new SiswaResource($siswa);
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

    public function siswaStore(){
        return [
            'kode_pendaftaran' => request('kode_pendaftaran'),
            'nama_siswa' => request('nama_siswa'),
            'jenis_kelamin' => request('jenis_kelamin'),
            'tempat_lahir' => request('tempat_lahir'),
            'tanggal_lahir' => request('tanggal_lahir'),
            'alamat' => request('alamat'),
            'kelurahan' => request('kelurahan'),
            'kecamatan' => request('kecamatan'),
            'kota' => request('kota'),
            'provinsi' => request('provinsi'),
            'nama_ortu' => request('nama_ortu'),
            'nomor_ortu' => request('nomor_ortu'),
            'nomor_nik' => request('nomor_nik'),
            'nomor_kk' => request('nomor_kk'),
            'status' => request('status'),
            'nisn' => request('nisn'),
            'semester_1' => request('semester_1'),
            'semester_2' => request('semester_2'),
            'semester_3' => request('semester_3'),
            'semester_4' => request('semester_4'),
            'semester_5' => request('semester_4'),

        ];
    }
}
