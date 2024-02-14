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
"userID",
"albumID"
    ];

    public function users()
    {
       return $this->belongsTo(User::class, "userID");
    }

    public function album()
    {
        return $this->belongsTo(Album::class, "albumID");
    }


    public function likeFoto()
    {
       return  $this->hasMany(LikeFoto::class, "fotoID");
    }
    
    
    public function komentarFoto()
    {
        return $this->hasMany(KomentarFoto::class, "fotoID");
    }
    
        
}
