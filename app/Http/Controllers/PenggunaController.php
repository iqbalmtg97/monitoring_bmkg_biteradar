<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Pengguna;
use Auth;
use Illuminate\Support\Facades\Hash;



class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('admin.pengguna', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Insert ke table User

        // dd($request->all())
        $user = new User;
        $user->role = 'pengguna';
        $user->name = $request->name;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str::random(60);
        $user->save();

        // Insert ke table pengguna
        $request->request->add(['user_id' => $user->id ]);
        $pengguna = Pengguna::create($request->except(['remember_token']));
        return redirect('/pengguna')->with('sukses','Data Berhasil di Simpan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pengguna::where('user_id', $id)->first();
        $data->user;
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $pengguna->user()->password =
        $update_p = \App\Pengguna::where('user_id', $request->id)->first()->update();
        $update = Auth::user()->where('id', $request->id)->first()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->back()->with('sukses','Password Pengguna Berhasil di Reset !!!');    
        // => Hash::make($newPassword)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengguna::where('user_id', $id)->first()->delete();
        User::destroy($id);
        return redirect('/pengguna')->with('sukses','Data Berhasil di Hapus !!!');
    }
}
