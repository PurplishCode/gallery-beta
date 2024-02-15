<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarFoto extends Model
{
    use HasFactory;

    protected $primaryKey = "komentarID";
    protected $table = "komentar_foto";

    protected $fillable = [
"isiKomentar",
"tanggalKomentar",
"fotoID",
"userID"
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function foto()
    {
        return $this->belongsTo(Foto::class, "fotoID");
    }
}
