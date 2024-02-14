<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$userID = Auth::id();

        $album = DB::table('album')->where('album.userID', $userID)->join('users', 'users.userID', '=', 'album.userID')->select('album.namaAlbum', 'users.username', 'album.deskripsi')->get();

        return view('pages.album.index', [
            "title" => "GD | Album",
            "album" => $album
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
    public function store(HttpRequest $request)
    {
        $request->validate([
            'namaAlbum' => "string|required|max:20",
            'deskripsi' => "string|required|max:254",
        ]);

        $user = auth()->user();

        $simpanFile = [
            'namaAlbum' => $request->namaAlbum,
            'deskripsi' => $request->deskripsi,
            'tanggalDibuat' => now(),
            'userID' => $user->userID,

        ];

        $success = Album::create($simpanFile);

        if ($success) {
            Log::info("Succesfully created an Album.");
            return redirect()->back();
        } else {
            Log::info("Failed to create an Album.");
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
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
