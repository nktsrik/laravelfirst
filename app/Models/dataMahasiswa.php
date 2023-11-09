<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataMahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama', 'jurusan'];
    protected $table = 'data_mahasiswa';
    public $timestamps = false;
}