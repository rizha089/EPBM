<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Admin;
use App\Siswa;
use App\Guru;
use App\MataPelajaran;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Exports\RateExport;
use Maatwebsite\Excel\Facades\Excel;



class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'admin';

    //protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.adminLogin');
    }

    public function guard()
    {
        return auth()->guard('admin');
    }

    public function showRegisterPage()
    {
        return view('auth.adminRegister');
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|string|max:199',
            'password' => 'required|string|confirmed'
        ]);
        $admin=Admin::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin-login')->with('success','Registration Success');
    }

    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['username' => $request->username, 'password' => $request->password ])) {
            return redirect()->route('admin');
        }


        return back()->withErrors(['username' => 'username or password are wrong.']);
    }

    public function daftarsiswa(){

        $daftarSiswa = Siswa::all();

        return view('layouts/dashboard/daftarsiswa', compact('daftarSiswa'));
    }

    public function siswaDelete($id){
        $siswa = Siswa::find($id);
        $siswa -> delete();
        
        return back();
    }

    public function daftarguru(){

        $daftarGuru = Guru::all();

        return view('layouts/dashboard/daftarguru', compact('daftarGuru'));
    }

    public function guruDelete($id){
        $guru = Guru::find($id);
        $guru -> delete();
        
        return back();
    }

    public function daftarMatpel(){

        $daftarMatpel = MataPelajaran::all();

        return view('layouts/dashboard/daftarmatpel', compact('daftarMatpel'));
    }

    public function matpelDelete($id){
        $matpel = MataPelajaran::find($id);
        $matpel -> delete();
        
        return back();
    }

    public function export_excel()
	{
		return Excel::download(new RateExport, 'Hasil Penilaian.xlsx');
    }

}