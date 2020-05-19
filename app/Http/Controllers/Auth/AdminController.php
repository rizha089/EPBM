<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Admin;
use App\Siswa;
use App\Guru;
use App\MataPelajaran;
use App\RatePertanyaan;
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

    public function export(){
        $rating = RatePertanyaan::paginate(10);
		return view('layouts/dashboard/export', ['rating' => $rating]);
    }

    public function tambahMatpel(){
        $mata_pelajaran = \App\MataPelajaran::all();
        
        $kelas = \App\Siswa::select('kelas')->distinct()->get();
        return view('layouts/dashboard/tambahMatpel', compact('mata_pelajaran', 'kelas'));
    }

    public function tambah(Request $request){
        // tambah matpel ke tabel mata pelajaran siswa
        $id_matpel = $request->input('tambahMatpel');

        // dd($id_matpel);
        $kelas = $request->input('kelas');
        $siswa = \App\Siswa::where('kelas', $kelas)->get();
        $guru = \App\MatpelGuru::where('id_matpel', $id_matpel)->get();

        for ($i=0; $i < count($siswa); $i++) { 
            $tambahMatpel = \App\MatpelSiswa::firstOrCreate([        
                'mata_pelajaran_id' => $id_matpel,
                'siswa_id' => $siswa[$i]->id,
            ]); 
        }
        
        for ($i=0; $i < count($siswa); $i++) { 
            for ($j=0; $j < count($guru); $j++) { 
                $program = \App\Programs::FirstOrCreate([
                    'id_guru' => $guru[$j]->guru->id,
                    'id_matpel' => $id_matpel,
                    'id_siswa' => $siswa[$i]->id
                ]);
            }
        }
        
        return back();
    }

    public function cari(Request $request){
        $guru_id = $request->input('guru_id');

        if(is_null($guru_id))
            $rating = RatePertanyaan::paginate(10);
        else
            $rating = RatePertanyaan::where('id_guru', $guru_id)->paginate(10);

        return view('layouts/dashboard/export', ['rating' => $rating]);
    }

}
