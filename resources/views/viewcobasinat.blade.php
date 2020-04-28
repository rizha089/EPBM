<!DOCTYPE html>
<html>
<head>
	<title>Cobacoba</title>
</head>
<body>
	<h1>
		<table>
			<thead>
					<tr>
						<th>Nama Pengguna</th>
						<th>Hadiah</th>
						<th>Jumlah</th>
					</tr>
			</thead>
			<tbody>
				@foreach($siswa as $s)
					<tr>
						<td>{{ $s->nama }}</td>
						<td>
							<ul>
								@foreach($s->matpel_siswa as $matpel)
									<li> {{ $matpel->nama_matpel }} </li>
								@endforeach
							</ul>
						</td>
					<td class="text-center">{{ $s->matpel_siswa->count() }}</td>
				</tr>
				@endforeach
			</tbody>
				
		</table>
	</h1>
</body>
</html>