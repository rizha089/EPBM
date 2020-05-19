# Sistem EPBM Sekolah Cendekia BAZNAS

<p align="center">
  <img width=500 src="readme_gambar/logoDoang.png 100px" />
</p>

## Sistem EPBM Sekolah Cendekia BAZNAS

<p style="text-align: justify">Sistem EPBM Sekolah Cendekia BAZNAS adalah platform untuk menyalurkan kontribusi mahasiswa aktif ilmu komputer IPB lewat title juara, partisipasi dalam acara kompetitif baik internal maupun eksternal, dan komunitas yang ada di Ilkom IPB.</p>

<p style="text-align: justify">Kontribusi ini digambarkan dengan sistem points yang didapatkan dari bukti partisipasi dari mahasiswa. Points ini didapatkan dari absen kegiatan komunitas, mengikuti kegiatan ilkom seperti workshop, pelatihan, dan konfirmasi sertifikat juara.</p>

- **Simple.** Tampilan yang sederhana.
- **SCB Account.** Login menggunakan akun SCB.
- **Dashboard.** Menampilkan informasi user.
- **Object-oriented.** Sistem EPBM SCB dikembangkan berbasis object-oriented.

<p style="text-align: justify">Sistem EPBM SCB dikembangkan menggunakan framework laravel sebagai back-end Web Development.</p>

- **Laravel Framework v5.7.16** untuk pengembangan back-end sisi Mobile Apps maupun Web Development, ini bertujuan untuk Integrasi Data yang ada pada sisi admin dan sisi user (Mahasiswa).


## Contents

- [Requirements](#-requirements)
- [Diagrams](#-diagrams)
- [Features](#-features)
- [Object-oriented programming](#-object-oriented-programming)
- [Design-Patterns](#-design-pattern)

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

- Login / Logout
- Register
- Admin
- Penilaian EPBM Guru
- Tambah Mata Pelajaran per Kelas
- Dashboard Tampilan Hasil Penilaian Guru
- Export Hasil Penilaian ke bentuk Excel


## 🚀 Object-oriented programming

Berikut class diagram dari Sistem EPBM.

<p align="center">
  <img width=500 src="readme_gambar/Class diagram.png" />
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


## 👏 Design Pattern

### Model View Controller (MVC)

<p align="center">
  <img width=500 src="readme_gambar/design pattern.png" />
</p>

<p style="text-align: justify">Pola desain MVC membagi aplikasi yang terdiri dari model data, presentasi informasi, dan informasi kontrol. Pola tersebut memisahkan ketiganya menjadi objek yang berbeda.
    Desain MVC membuat tiga objek yaitu Model, View dan Controller. Model hanya berisi data murni yang tidak mengandung logika untuk disajikan kepada pengguna. View menyajikan data model yang sudah diolah kepada pengguna, view mengerti cara mengakses model namun tidak mengerti maksud dari data tersebut. Controller ada diantara View dan Model, Controller mendengar apa yang diinginkan View kemudian memberikan reaksi yang sesuai dengan yang diinginkan. Pada kasus ini reaksi tersebut adalah mengakses Model kemudian diteruskan kepada View untuk menampilkan data kepada pengguna.</p>


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
