<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = "album";
    protected $primaryKey = "albumID";

    protected $fillable = [
        "namaAlbum",
        "deskripsi",
        "tanggalDibuat",
        "userID",
    ];

    public function users()
    {
        return $this->belongsTo(User::class, "userID");
    }


    public function foto()
    {
        return $this->hasMany(Foto::class, "albumID");
    }
}
