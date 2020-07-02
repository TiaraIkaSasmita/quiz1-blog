@extends('layouts.app')
@section('content')

<div class="container">
	<center><h3>Input Data Album</h3></center>
	<form method="post" action="{{url('/album')}}">
	@csrf
		<center><table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor="87CEFA" align="center">
			<tr>
				<td>PHOTO ID</td>
				<td><input type="text" name="album_pho_id" class="form-control"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="album_name" class="form-control"></td>
			</tr>
			<tr>
				<td>KETERANGAN</td>
				<td><input type="text" name="album_text" class="form-control"></td>
			</tr>
			

			<tr>
				<td></td>
			<td><button type="submit" class="btn btn-primary">SIMPAN</button></td>
			</tr>
		</table></center>

	</form>
</div>

@endsection