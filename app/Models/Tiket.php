<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = "tikets";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'id_user','tanggal','dewasa','anak','total_harga','status'];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
