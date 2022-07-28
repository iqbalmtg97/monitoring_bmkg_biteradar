<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;
use Reminder;
use App\User;
use App\Resetpassword;
use Mail;
use DB; 

class LupapasswordController extends Controller
{
    public function lupa(){
        return view ('keamanan.lupa');
    }

    public function index()
    {
        // $rp = Resetpassword::all();
        $rp = DB::select('select * from reset_password ORDER BY id DESC');


        return view('notifikasi', compact('rp'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Resetpassword::create($request->all());
        // $rpp = Resetpassword::create($request->except(['remember_token']));

        return redirect('/')->with('sukses','Data Berhasil di Simpan !!!'); 
    }

    // public function password(Request $request){
    //     $user = User::whereEmail($request->email)->first();

    //     if($user == null){
    //         return redirect()->back()->with(['error' => 'Email Tidak Ada']);
    //     }

    //     $user = Sentinel::findById($user->id);
    //     $reminder = Reminder::exists($user) ? : Reminder::create($user);
    //     $this->sendEmail($user, $reminder->code);

    //     return redirect()->back()->with(['success' => 'Kode Password dikirim ke Email Anda']);
    // }

    // public function sendEmail($user, $code){
    //     Mail::send(
    //         'keamanan.lupa2',
    //         ['user' => $user, 'code' => $code],
    //         function($message) use ($user){
    //             $message->to($user->email);
    //             $message->subject("$user->name, Reset Password Anda.");
    //         }
    //     );
    // }
}
