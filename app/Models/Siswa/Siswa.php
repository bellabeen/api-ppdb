<?php

namespace App\Models\Siswa;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [        
    'kode_pendaftaran',
    'nama_siswa',
    'jenis_kelamin',
    'tempat_lahir',
    'tanggal_lahir',
    'alamat',
    'kelurahan',
    'kecamatan',
    'kota',
    'provinsi',
    'nama_ortu',
    'nomor_ortu',
    'nomor_nik',
    'nomor_kk',
    'status',
    'nisn',
    'semester_1',
    'semester_2',
    'semester_3',
    'semester_4',
    'semester_5',
    ];

    public function getRouteKey()
    {
        return 'kode_pendaftaran';
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    // public function nilai(){
    //     return $this->hasOne('App\Models\Nilai');
    // }
    // public function nilai(){
    //     return $this->hasOne(Nilai::class);
    // }

    // public function phone()
    // {
    //     return $this->hasOne('App\Phone');
    // }

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
    
    // public function nilai(){
    //     return $this->hasOne(Nilai::class);
    // }
}
