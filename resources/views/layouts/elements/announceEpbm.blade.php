@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')

<div class="container-fluid">
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading" style="margin-left:20px">
            <h3 class="panel-title">EPBM Online</h3>
        </div>
    </div>

    <div class="panel">
            <div class="block-title" style="padding: 0px 50px 0px 50px">
                <h2>Data Siswa</h2>
                <div class="table-responsive" style="margin-bottom:310px">
                    <table>
                        <tbody>
                            <tr>
                                <td style="font-weight:bold; width:200px;font-size:18px;">
                                    Nama
                                </td>
                                <td style="width:20px;font-size:18px;">
                                    :
                                </td>
                                <td style="font-size:18px;">
                                    {{Auth::user()->nama}}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; width:200px;font-size:18px;">
                                    NIS
                                </td>
                                <td style="width:20px;font-size:18px;">
                                    :
                                </td>
                                <td style="font-size:18px;">
                                    {{Auth::user()->nis}}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; width:200px;font-size:18px;">
                                    Kelas
                                </td>
                                <td style="width:20px;font-size:18px;">
                                    :
                                </td>
                                <td style="font-size:18px;">
                                    {{Auth::user()->kelas}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h1 style="margin-top: 30px;text-align:center;font-weight:bold;color:red;">PENGUMUMAN</h1>
                    <div style="margin-top: 30px;text-align:justify;padding: 0px 50px 0px 50px;font-size:18px;">
                    Peningkatan kinerja merupakan kewajiban setiap organisasi ataupun institusi termasuk SCB. Opini siswa  dihimpun setiap semester untuk semua matakuliah dan dosen pengajar. Proses pengumpulan opini siswa di SCB dikenal dengan istilah Evaluasi Proses Kegiatan dan Belajar (EPBM).
                    <br>
                    Adapun manual pengoperasian Sistem EPBM Online ini disiapkan dengan tujuan:
                    <ol>
                        <li>Membantu para pengguna dalam mengoperasikan atau menggunakan sistem EPBM online.
                        <li>Membantu pihak Administrator dalam menampung data evaluasi kegiatan belajar dan mengajar dari siswa.
                        <li>Memberikan informasi peningkatan proses kegiatan belajar dan mengajar dalam setiap semester dari tahun ke tahun.
                    </ol><br>Persyaratan yang harus dipenuhi saat mengakses sistem EPBM Online antara lain:
                    <ol>
                        <li>Komputer yang digunakan terhubung ke jaringan internet maupun intranet SCB. Pastikan komputer pengguna terhubung dengan jaringan LAN baik dengan menggunakan kabel UTP maupun menggunakan sarana Wireless yang sudah terpasang.</li>
                        <li>Pastikan  komputer  yang  digunakan  sudah  terinstal  salah  satu  program  perambah  (browser) seperti Mozilla Firefox, Google Chrome, Internet Explorer, dll. untuk digunakan menjalankan Sistem EPBM.</li>
                        <li>Pengguna  mengakses  website  Evaluasi  Proses  Belajar  Mengajar pada  alamat http://epbm.scb.sch.id</li>
                        <li>Pastikan Username dan password anda pada jaringan SCB pengguna adalah benar dan aktif.</li>
                        <li>Semua pertanyaan yang telah disediakan wajib di isi semua oleh siswa.</li>
                    </ol>
                    </div>
                    <a style="margin-top: 50px;border-radius:4px; position: absolute;right: 100px;" href="{{ route('epbmOnline.EPBM')}}" >Isi EPBM</a>
                    <a href="{{ route('epbmOnline.EPBM')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Isi EPBM</a>
                </div>
            </div>
    </div



@endsection


@section('extra-script')

@endsection
