<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login1');
    }

    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('name','password'))) {
            return redirect('/profile');            
    	}
    	return redirect('/login');
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect('/login');
    }
    
    public function profile()
    {
        $data = Auth::user();
        
        return view('profile.index', compact('data'));
    }

    public function edit($id)
    {
        $data = Auth::user()->where('id', $id)->first();
        return $data;
    }
    
    public function update(Request $request)
    {
        $update = Auth::user()->where('id', $request->id)->first()->update($request->except(['url_getdata']));
        $update_p = \App\Pengguna::where('user_id', $request->id)->first()->update([
            'name' => $request->name,
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function changePassword(Request $request){


        $oldPassword = $request->get('current-password');
            $newPassword = $request->get('new-password');


        if (!Hash::check($oldPassword, Auth::user()->password)) {
            return redirect()->back()->with('gagal','Password tidak ada di database !!!');
        }
        elseif($newPassword !== $request->get('password-confirmation')){
            return redirect()->back()->with('gagal','Harap cek kembali password anda dengan benar !!!');
        }
        else{
                $request->user()->fill(['password' => Hash::make($newPassword)])->save();

        return redirect()->back()->with('sukses','Password Berhasil Di Ubah !!!');
        }
            }
}
