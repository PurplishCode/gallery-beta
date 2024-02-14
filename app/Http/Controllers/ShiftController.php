<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
"username" => "string|required|max:30",
"email" => "email|required|max:20",
"password" => "string|required|max:16",
"namaLengkap" => "string|required|max:30",
"alamat" => "string|required|max:254"
        ]);

$storeData = [
'username' => $request->username,
'email' => $request->email,
'password' => Hash::make($request->password),
'namaLengkap' => $request->namaLengkap,
'alamat' => $request->alamat
];

$savedData = User::create($storeData);

if($savedData) {
    $credentials = User::where('email', $request->email)->first();

    if($credentials && Hash::check($request->password, $savedData->password)) {
        $check = $request->only("email", "password");
    
    if(Auth::attempt($check)) {
Log::info("Session is saved: ",session()->all());
return redirect()->route("user.home");
    }
    } else {
        return redirect()->route("login.display");
    }
} else {
    Log::info("We failed to create your account.");
    return redirect()->back();
}


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // To-DO EXPLORE ALL PHOTO from Respective USERS.

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
