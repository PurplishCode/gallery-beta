<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = auth()->user()->userID;

       $foto = DB::table('foto')->where("foto.userID", $userID)->join("users", "foto.userID", "=", "users.userID")->leftJoin('album', 'album.albumID', '=', 'foto.albumID')->select('foto.judulFoto', 'foto.deskripsiFoto', 'foto.lokasiFile', 'album.albumID', 'album.namaAlbum')->get();


$album = DB::table('album')->where("album.userID", $userID)->join("users", "users.userID", "=", "album.userID")->select("album.albumID", "album.namaAlbum")->get();

        return view("pages.users.index", [
            "foto" => $foto,
            "album" => $album,
            "title" => "GD | Home"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "judulFoto" => "string|required|max:20",
            "deskripsiFoto" => "string|required|max:254",
            "lokasiFile" => "file"
        ]);

        $ambilFile = $request->file("lokasiFile");
        $extensiFile = $ambilFile->extension();
        $namaFile = date("ymdhis") . '.' . $extensiFile;
        $ambilFile->move(public_path('img'), $namaFile);

        $user = auth()->user();
        $userID =  $user->userID;
        $album = $user->album;

        $dataAlbumID = $album->find("albumID", $request->albumID);

        $simpanData = [
            "judulFoto" => $request->judulFoto,
            "deskripsiFoto" => $request->deskripsiFoto,
            "tanggalUnggah" => now(),
            "lokasiFile" => $namaFile,
            "userID" => $userID,
            "albumID" => $dataAlbumID
        ];

        $berhasil = Foto::create($simpanData);
        if ($berhasil) {
            Log::info("Data berhasil disimpan.");
            return redirect()->back();
        } else {
            Log::info("Data tidak berhasil disimpan.");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFotoRequest $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        //
    }
}
