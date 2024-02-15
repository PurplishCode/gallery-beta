<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeFoto extends Model
{
    use HasFactory;

    protected $primaryKey = "likeID";

    protected $table = "like_foto";

    protected $fillable = [
"fotoID",
"userID",
"tanggalLike"
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    
    public function foto()
    {
        return $this->belongsTo(Foto::class, 'fotoID');
    }

}
