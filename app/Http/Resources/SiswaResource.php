<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'kode_pendaftaran' => $this->kode_pendaftaran,
            'nisn' => $this->nisn,
            'nama_siswa' => $this->nama_siswa,

            'status' => $this->status,
            'kode_pendaftaran' => $this->kode_pendaftaran,
            'nama_siswa' => $this->nama_siswa,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'alamat' => $this->alamat,
            'kelurahan' => $this->kelurahan,
            'kecamatan' => $this->kecamatan,
            'kota' => $this->kecamatan,
            'provinsi' => $this->provinsi,
            'nama_ortu' => $this->nama_ortu,
            'nomor_ortu' => $this->nomor_ortu,
            'nomor_nik' => $this->nomor_nik,
            'nomor_kk' => $this->nomor_kk,
            'status' => $this->status,
            'nisn' => $this->nisn,
            'semester_1' => $this->semester_1,
            'semester_2' => $this->semester_2,
            'semester_3' => $this->semester_3,
            'semester_4' => $this->semester_4,
            'semester_5' => $this->semester_5,
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}
