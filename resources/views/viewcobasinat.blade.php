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
				<th>Nama</th>
				<th>Nama matpel</th>
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
				<th>5</th>
				<th>6</th>
				<th>7</th>
				<th>avg</th>
			</thead>
			<tbody>
<<<<<<< HEAD
				@foreach($rate as $rate)
=======
                @foreach($rate as $rate)
>>>>>>> 880a7f50a1cbe03982b561e95811280bc1fa878e
				<tr>
					<td> {{ $rate->guru->nama }} </td>
					<td> {{ $rate->mata_pelajaran->nama_matpel }} </td>
					<td> {{ $rate->pertanyaan1 }} </td>
					<td> {{ $rate->avg('pertanyaan2') }} </td>
					<td> {{ $rate->avg('pertanyaan3') }} </td>
					<td> {{ $rate->avg('pertanyaan4') }} </td>
					<td> {{ $rate->avg('pertanyaan5') }} </td>
					<td> {{ $rate->avg('pertanyaan6') }} </td>
					<td> {{ $rate->avg('pertanyaan7') }} </td>
					<td> {{ $rate->avg('averageRate') }} </td>
				</tr>
<<<<<<< HEAD
				@endforeach
=======
                @endforeach
>>>>>>> 880a7f50a1cbe03982b561e95811280bc1fa878e
			</tbody>
		</table>
	</div>


<div id="select">

</div>

</body>
</html>
