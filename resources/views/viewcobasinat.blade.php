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
				<form class="form-horizontal" role="form" method="POST" action="/test" id="tambah">
				{{ csrf_field() }}
					<tr>
						<td>
							<input type="hidden" name="kelas" value={{ $class->kelas }}>
							{{ $class->kelas }}
						</td>
						<td>
							<select name="tambahMatpel" class="form control">
								<option value="">Tambah Mata Pelajaran</option>
								@foreach ($mata_pelajaran as $matpel)
									<option value=" {{$matpel->id}} ">{{$matpel-> nama_matpel}}</option>
								@endforeach
							</select>
						</td>
						<td>
							<input class="btn btn-primary" type="submit" value="Tambahkan" name="submit" type="Submit">
						</td>
					</tr>
				</form>
				@endforeach
			</tbody>
		</table>
	</div>
	

<div id="select">

</div>

</body>
</html>