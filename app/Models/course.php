<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'courses'; // Nama tabel yang terhubung dengan model Course
    protected $fillable = ['name', 'price', 'image', 'field_id']; // Kolom-kolom yang dapat diisi secara massal

    // Definisikan relasi dengan model Field jika diperlukan
    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }
}
