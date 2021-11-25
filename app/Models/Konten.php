<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
    protected $table = "kontens";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'judul','isi','gambar','tag'];
}
