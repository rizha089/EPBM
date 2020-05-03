<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class GuruController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'guru';

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.guruLogin');
    }

    public function guard()
    {
        return auth()->guard('guru');
    }

    public function showRegisterPage()
    {
        return view('auth.guruRegister');
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|string|max:199',
            'nip' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed'
        ]);
        $guru=Guru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('guru-login')->with('success','Registration Success');
    }

    public function login(Request $request)
    {
        if (auth()->guard('guru')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('guruPage');
        }


        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }

    public function gurus(Guru $guru){
        $gurus = $guru -> all();
        return response()->json($gurus);
}
}