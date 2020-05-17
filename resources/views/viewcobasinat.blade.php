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
	<form class="form-horizontal" role="form" method="POST" action="/test" id="tambah">
	{{ csrf_field() }}
	<div class="form-group">
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>Kelas</th>
					<th>Mata Pelajaran</th>
					{{-- <th>OPSI</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach ($kelas as $class)
					<tr>
						<td>
							<input type="hidden" name="kelas" value="{{ $class->kelas }}">
							{{ $class->kelas }}
						</td>
						<td>
							<input class="btn btn-primary" type="submit" value="Tambahkan" name="submit" type="Submit">
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	</form>

<div id="select">
<select name="tambahMatpel" class="form control" form="tambah">
	<option value="">Tambah Mata Pelajaran</option>
	@foreach ($mata_pelajaran as $matpel)
		<option value=" {{$matpel->id}} ">{{$matpel-> nama_matpel}}</option>
	@endforeach
</select>
</div>

</body>
</html>