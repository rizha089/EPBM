<!DOCTYPE html>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
  text-align: left;
}
</style>
<html>
<head>
    <title>Cobacoba</title>
</head>
<body>
    <div class="container">
        <center>
            <h4>Export Laporan Excel Pada Laravel</h4>
        </center>
        
        <a href="/rating/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nama Guru</th>
                    <th>Nama Matpel</th>
                    <th>Pertanyaan 1</th>
                    <th>Pertanyaan 2</th>
                    <th>Pertanyaan 3</th>
                    <th>Pertanyaan 4</th>
                    <th>Pertanyaan 5</th>
                    <th>Pertanyaan 6</th>
                    <th>Pertanyaan 7</th>
                    <th>Pertanyaan 8</th>
                    <th>Pertanyaan 9</th>
                    <th>Average Rate</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($rate as $s)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$s->siswa->nama}}</td>
                    <td>{{$s->guru->nama}}</td>
                    <td>{{$s->mata_pelajaran->nama_matpel}}</td>
                    <td>{{$s->pertanyaan1}}</td>
                    <td>{{$s->pertanyaan2}}</td>
                    <td>{{$s->pertanyaan3}}</td>
                    <td>{{$s->pertanyaan4}}</td>
                    <td>{{$s->pertanyaan5}}</td>
                    <td>{{$s->pertanyaan6}}</td>
                    <td>{{$s->pertanyaan7}}</td>
                    <td>{{$s->pertanyaan8}}</td>
                    <td>{{$s->pertanyaan9}}</td>
                    <td>{{$s->averageRate}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>