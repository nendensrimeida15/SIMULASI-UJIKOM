
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		table tr th{
			font-weight:bold;
			text-align:center;
			background:#f4f4f4;
		}
	</style> 
	<center>
		<h4>DATA BUKU</h4>
		<p>Waktu Export : {{date('d-m-Y H:i')}}</p>
	</center>
 
	<table class='table table-bordered'>
		<thead>
		<tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
			<th>Tahun Terbit</th>

		</tr>
		</thead>
		<tbody>
		@php $no=1; @endphp
		@if(count($data))
		@foreach($data as $dt)
			@php 
			$dbKategori=DB::table('users')->select('*')->first();
			@endphp
			<tr>
				<td>{{$no++}}</td>
				 <td>{{$dt->judul??''}}</td>
                 <td>{{$dt->penulis??''}}</td>
                 <td>{{$dt->penerbit??''}}</td>
                 <td>{{$dt->tahun_terbit??''}}</td>
                  <td>{{$dt->namerole??''}}</td>
			</tr>
		@endforeach
		@endif
		</tbody>
	</table>
 
</body>
</html>