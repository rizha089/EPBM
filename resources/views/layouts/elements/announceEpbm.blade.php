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
                    <h1 style="margin-top: 30px;text-align:center;font-weight:bold;">PENGUMUMAN</h1>
                    <div style="margin-top: 30px;text-align:justify;">
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                                ini isinya term and condition cuy ini isinya term and condition cuy
                    </div>
                    <a style="margin-top: 50px;border-radius:4px; position: absolute;right: 100px;" href="{{ route('epbmOnline.EPBM')}}" >Isi EPBM</a>
                    <a href="{{ route('epbmOnline.EPBM')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Isi EPBM</a>
                </div>
            </div>
    </div



@endsection


@section('extra-script')

@endsection
