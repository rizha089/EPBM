<!DOCTYPE html>
<html>
<head>
	<title>Cobacoba</title>
</head>
<body>
	<table border="1" align="center">
		<thead align="center">
				<tr align="center">
					<th>Nama</th>
					<th>Mata Pelajaran</th>
					<th>Jumlah</th>
				</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $siswa->nama }}</td>
				<td>
					<ul>
						@foreach($siswa->matpel_siswa as $matpel)
							<li> {{ $matpel->nama_matpel }} </li>
						@endforeach
					</ul>
				</td>
				<td class="text-center">{{ $siswa->matpel_siswa->count() }}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>