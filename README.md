# Sistem EPBM Sekolah Cendekia BAZNAS

<p align="center">
  <img width=500 src="readme_gambar/logoDoang.png" />
</p>

## Sistem EPBM Sekolah Cendekia BAZNAS

<p style="text-align: justify">Sistem EPBM Sekolah Cendekia BAZNAS adalah platform untuk menyalurkan kontribusi mahasiswa aktif ilmu komputer IPB lewat title juara, partisipasi dalam acara kompetitif baik internal maupun eksternal, dan komunitas yang ada di Ilkom IPB.</p>

<p style="text-align: justify">Kontribusi ini digambarkan dengan sistem points yang didapatkan dari bukti partisipasi dari mahasiswa. Points ini didapatkan dari absen kegiatan komunitas, mengikuti kegiatan ilkom seperti workshop, pelatihan, dan konfirmasi sertifikat juara.</p>

- **Simple.** Tampilan yang sederhana.
- **SCB Account.** Login menggunakan akun IPB.
- **Certificate.** Unggah sertifikat prestasi akademik maupun non-akademik.
- **Dashboard.** Menampilkan informasi terkini seputar Ilkom IPB.
- **Leaderboard.** Menampilkan peringkat mahasiswa berdasarkan kontribusi di Ilkom IPB.
- **Object-oriented.** Sistem EPBM SCB dikembangkan berbasis object-oriented.

<p style="text-align: justify">Sistem EPBM SCB dikembangkan menggunakan beberapa framework, diantaranya Ionic sebagai front-end Mobile Apps, Laravel sebagai back-end, dan Admin LTE sebagai front-end Web Development.</p>

- **Ionic Framework v4.12.0** untuk pengembangan front-end Mobile Apps yang ditujukan untuk Mahasiswa Ilmu Komputer IPB.

<p align="center">
  <img height="100" src="readme-images/ionic-logo.png">
</p>

- **Laravel Framework v5.7.16** untuk pengembangan back-end sisi Mobile Apps maupun Web Development, ini bertujuan untuk Integrasi Data yang ada pada sisi admin dan sisi user (Mahasiswa).

<p align="center">
  <img height="150" src="readme-images/laravel-logo.png">
</p>


- **Admin LTE berbasis Bootstrap 3 Framework** untuk pengembangan front-end Web Development yang ditujukan untuk Admin Ilmu Komputer IPB. 

<p align="center">
  <img height="200" src="readme-images/adminlte-logo.png">
</p>


## Contents

- [Requirements](#-requirements)
- [Diagrams](#-diagrams)
- [Features](#-features)
- [Object-oriented concept](#-object-oriented-concept)
- [Anti-patterns](#-anti-patterns)
- [Suggestion](#-suggestion)
- [Credit](#-credit)

## 📋 Requirements

Framework:
- **Laravel Framework 7.11.0** yang dapat dilihat di [sini][laravel].

Sistem EPBM Sekolah Cendekia BAZNAS menargetkan pengguna dengan sistem operasi:
- Windows, macOS, atau Linux untuk Siswa, Guru dan Admin yang bisa diakses menggunakan akun masing masing. 

[laravel]: https://laravel.com/docs/7.x/installation


## 📖 Diagrams

### Use Case Diagram

<p align="center">
  <img width=500 src="readme_gambar/use case diagram.png" />
</p>

### Class Diagram

<p align="center">
  <img width=500 src="readme_gambar/Class diagram.png" />
</p>

### Activity Diagram

- Aktivity diagram mengisi biodata guru dan murid 

<p align="center">
  <img width=300 src="readme_gambar/aktivity diagram.png" />
</p>

- Aktivity diagram mengisi EPBM 

<p align="center">
  <img width=300 src="readme_gambar/aktivity diagram mengisi epbm.png" />
</p>



## 🎉 Features

- Login
- Dashboard (Timeline)
- Leaderboard
- Komunitas
- Profile
- Upload Certificate
- Absensi via QR Code
- Trade Points

## 🚀 Object-oriented concept

Berikut class diagram dari Sistem EPBM.

<p align="center">
  <img width=500 src="readme-images/class.png" />
</p>

### Encapsulation

```php
...
class GuruController extends Controller
{
    //
    public function index() {
        // Buat Dapetin Pertanyaan
        $pertanyaans_db = DB::table('pertanyaan')->select('list_pertanyaan')->get();
        $pertanyaan = [];
        foreach($pertanyaans_db as $p) {
            array_push($pertanyaan, $p->list_pertanyaan);
        }

        $matpel_db = DB::table('matpel_guru')
                        -> join('mata_pelajaran', 'matpel_guru.id_matpel', '=', 'mata_pelajaran.id')
                        -> select('mata_pelajaran.nama_matpel')
                        -> where('matpel_guru.id_guru', auth()->user()->id)
                        -> get();
        $matpel = [];
        foreach($matpel_db as $m) {
            array_push($matpel, $m->nama_matpel);
        }

        $nilai= array(array(array()));
        // Per Matpel
        for($i = 0; $i < count($matpel); $i++) {
            // Per Pertanyaan
            for($j = 0; $j < 7; $j++){
                $temp = DB::table('rekap')
                            -> join('guru', 'rekap.id_guru', '=', 'guru.id')
                            -> join('mata_pelajaran', 'rekap.id_matpel', '=', 'mata_pelajaran.id')
                            -> join('pertanyaan', 'rekap.id_pertanyaan', '=', 'pertanyaan.id')
                            -> where('rekap.id_guru', auth()->user()->id)
                            -> groupBy('guru.nama', 'mata_pelajaran.nama_matpel', 'pertanyaan.list_pertanyaan', 'nilai')
                            -> select(DB::raw('count(nilai) as count_nilai'))
                            -> where('rekap.id_pertanyaan', $j+1)
                            -> get();

                $temp_nilai = [];
                foreach($temp as $t) {
                    array_push($temp_nilai, $t->count_nilai);
                }
                $nilai[$i][$j][] = $temp_nilai;
            }
        }

        // Get rata-rata per matpel
        $rata_db = DB::table('rate_pertanyaan')
                    -> where('id_guru', auth()->user()->id)
                    -> select('id_matpel', DB::raw('avg(averageRate) as avg_rate'))
                    -> groupBy('id_guru', 'id_matpel')
                    -> get();

        $rata = [];
        foreach($rata_db as $r) {
            array_push($rata, $r->avg_rate);
        }

        // return $rata;
        // return json_encode($nilai[0][1][0][0]);
        return view('guruPage', ['pertanyaan' => $pertanyaan, 'matpel' => $matpel, 'nilai' => $nilai, 'rata'=>$rata]);
    }
}


class EpbmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $guru = Guru::all();
        return view('layouts/elements/epbm', ['guru' => $guru]);
    }

    public function isiEPBM(Request $request, $id)
    {
        // $matpel_guru = MatpelGuru::where('id_matpel', $id)->where('filled', 0)->get();

        $id_siswa = Auth::id();
        $matpel_guru = Programs::where('id_matpel', $id)->where('id_siswa', $id_siswa)->where('filled', 0)->get();

        // dd($matpel_guru);
        // print(count($matpel_guru));

        if(count($matpel_guru) == 0){
            $matpel = MatpelSiswa::where('siswa_id', $id_siswa)->where('mata_pelajaran_id', $id)->update(
                ['filled' => 1]
            );
            return redirect()->action('ElementController@index');
        }
        else{
            $tanya = Pertanyaan::all();
            return view('layouts/elements/epbm', compact('matpel_guru','tanya'));
        }

    }
}
...
```


## 👏 Anti-patterns

### Dependency hell

<p style="text-align: justify">Dependency hell dapat diartikan sebagai jumlah dependency yang besar dalam pengembangan. Hal ini terjadi karena Ilkomerz Juara tersedia untuk Mobile Apps dan Web sehingga banyaknya framework yang digunakan. Otomatis semakin banyak framework yang digunakan, maka semakin banyak dependency yang harus disiapkan sebelum melakukan developing. Kesulitan yang didapat pada anti-pattern ini adalah kalau misal ditemukan error pada suatu dependency, maka akan sulit untuk menemukan dependency mana yang harus di fix/update karena dependency yang besar.</p>

### Poltergeists

Menuliskan function atau class pada suatu program tanpa tujuan yang jelas. Istilah lain menurut [SourceMaking.com][sm] adalah `"I'm not exactly sure what this class does, but it sure is important!"`

[sm]: https://sourcemaking.com/antipatterns/poltergeists

## Suggestion
Framework:
- **Ionic Framework v4.12.0** yang dapat dilihat di [sini][ionic].
- **Laravel Framework v5.7.16** yang dapat dilihat di [sini][laravel].
- **Admin LTE** yang dapat dilihat di [sini][adminlte].

Sistem EPBM Sekolah Cendekia BAZNAS menargetkan pengguna dengan sistem operasi:
- iOS atau Android untuk Mahasiswa yang bisa diakses menggunakan akun IPB.
- Windows, macOS, atau Linux untuk Admin yang bisa diakses menggunakan akun admin. 

## 📄 Credit

Aplikasi Ilkomerz Juara telah dikembangkan sejak mata kuliah SI hingga mata kuliah PSBO.

### Client
- Sekolah Cendekia Badan Amil Zakat Nasional

### Project Manager
- Muhammad Farhan Dirhami  G64170099
### Front-end Developer
- Rizha Al-Fajri           G64170003
- Jimmi Alfriando          G64170005
- Aslam Alfathan           G64170076
### Back-end Developer
- Irfan Alghani Khalid     G64170054
- Julius Christopher       G64170097
- Lanang Satia Aji         G64170095
- M Rizqi Sinatrya         G64170064
### Design UI/UX
- Ari Corvin               G64170024
- Muhammad Alpha Thoriq    G64170002
