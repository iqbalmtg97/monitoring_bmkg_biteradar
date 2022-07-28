<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Notifikasi;
use App\Resetpassword;

class NotifikasiController extends Controller
{

    public function index()
    {
        $rp = Resetpassword::all();

        return view('notifikasi', compact('rp'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        // Resetpassword::create($request->all());
        // $rpp = Resetpassword::create($request->except(['remember_token']));

        // return redirect('/'); 
    }
}
