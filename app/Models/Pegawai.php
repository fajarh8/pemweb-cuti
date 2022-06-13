<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Pegawai extends Model implements
    Authenticatable
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [
        'nik',
        'no_induk',
        'password',
        'nama',
        'alamat',
        'jenis_kelamin',
        'id_departemen',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'id_departemen', 'id');
    }

    public function riwayatCuti()
    {
        return $this->hasMany(RiwayatCuti::class, 'id_pegawai', 'id');
    }

    public function getAuthIdentifierName()
    {
        return $this->primaryKey;
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value)
    {
    }

    public function getRememberTokenName()
    {
        return '';
    }
}
