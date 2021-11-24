<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    use HasFactory;

    protected $table = "penginapans";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama_villa','detail','harga'];
}
