<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'id_user','id_villa','id_pembayaran','checkin','checkout','dewasa','anak','total_harga','status'];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function villa(){
        return $this->belongsTo(Penginapan::class, 'id_villa');
    }
}
