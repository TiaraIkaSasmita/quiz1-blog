@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Input Data Photo</h3></center>
	<form method="post" action="{{url('/photo')}}">
	@csrf
		<center><table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor="87CEFA" align="center">
			<tr>
				<td>POST ID</td>
				<td><input type="text" name="pho_post_id" class="form-control"></td>
			</tr>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="pho_date" class="form-control"></td>
			</tr>
			<tr>
				<td>JUDUL</td>
				<td><input type="text" name="pho_tittle" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="pho_text" class="form-control"></td>
			</tr>

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table></center>

	</form>
</div>

@endsection