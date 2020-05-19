# Sistem EPBM Sekolah Cendekia BAZNAS

<p align="center">
  <img width=500 src="EPBM/readme_gambar/logo epbm.png" />
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
- **Ionic Framework v4.12.0** yang dapat dilihat di [sini][ionic].
- **Laravel Framework v5.7.16** yang dapat dilihat di [sini][laravel].
- **Admin LTE** yang dapat dilihat di [sini][adminlte].

Sistem EPBM Sekolah Cendekia BAZNAS menargetkan pengguna dengan sistem operasi:
- iOS atau Android untuk Mahasiswa yang bisa diakses menggunakan akun IPB.
- Windows, macOS, atau Linux untuk Admin yang bisa diakses menggunakan akun admin. 

[ionic]: https://ionicframework.com/docs/installation/cli
[laravel]: https://laravel.com/docs/5.8/installation
[adminlte]: https://adminlte.io/docs/2.4/installation

## 📖 Diagrams

### Use Case Diagram

<p align="center">
  <img width=500 src="readme-images/use-case-diagram.jpg" />
</p>

### Class Diagram

<p align="center">
  <img width=500 src="readme-images/class-diagram.jpg" />
</p>

### Activity Diagram

- Absensi

<p align="center">
  <img width=300 src="readme-images/activity-diagram-absensi.jpg" />
</p>

- Leaderboard

<p align="center">
  <img width=300 src="readme-images/activity-diagram-leaderboard.jpg" />
</p>

- Points

<p align="center">
  <img width=300 src="readme-images/activity-diagram-points.jpg" />
</p>

- Post in Timeline

<p align="center">
  <img width=300 src="readme-images/activity-diagram-post-in-timeline.jpg" />
</p>

- Sertifikat

<p align="center">
  <img width=300 src="readme-images/activity-diagram-sertifikat.jpg" />
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

Berikut class diagram dari Ilkomerz Juara.

<p align="center">
  <img width=500 src="readme-images/class.png" />
</p>

### Encapsulation

```php
...
class komunitasController extends Controller
{
    public function index()
    {
        $komunitas = komunitas:all();
        $date = new DateTime();
        $stamp = $date->getTimeStamp();
        $zval = strval(intval($stamp / 86400) ** 2 % 1000000);
        $url = 'http://192.168.43.195/api/absen/';

        $i = 0;
        $encrypted = '';
        foreach(str_split($url) as $char)
        {
            $encrypted .= chr(ord($char) ^ ord($zval{$i++ % strlen($zval)}));
        }
        $secret = base64_encode($encrypted);
        return view('komunitas', compact('komunitas', 'secret'));
    }
...
```

### Inheritance

```php
...
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends user
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
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
