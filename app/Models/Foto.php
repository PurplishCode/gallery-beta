<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $primaryKey = "fotoID";
    protected $table = "foto";

    protected $fillable = [
"judulFoto",
"deskripsiFoto",
"lokasiFile",
"tanggalUnggah",
"albumID"
    ];

    public function users()
    {
        $this->belongsTo(User::class, "userID");
    }

    public function album()
    {
        $this->belongsTo(Album::class, "albumID");
    }


    public function likeFoto()
    {
        $this->hasMany(LikeFoto::class, "fotoID");
    }
    
    
    public function komentarFoto()
    {
        $this->hasMany(KomentarFoto::class, "fotoID");
    }
    
        
}
