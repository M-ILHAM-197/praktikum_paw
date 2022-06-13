@extends('master')

@section('konten')
<div class="container">
	<h2>Data Mahasiswa</h3>
	<div class="show-data-mahasiswa">
	@foreach($mahasiswa as $m)
	<div class="card">
		<div class="left">
			<h3>{{ $m->nama }}</h3>
			<p>{{ $m->nrp }}</p>
			<p>{{ $m->alamat }}</p>
		</div>
		<div class="right">
			<div class="btn-group">
				<form action="index/hapus/{{ $m->no }}" method="get">
                @csrf
                @method('delete')
                <button type="submit" class="btn-delete"><i class="fi fi-rr-trash"></i></button>
                </form>
                <a href="index/edit/{{ $m->no }}" class="btn-edit"><i class="fi fi-rr-edit"></i></a>
			</div>
			<p>{{ $m->email }}</p>
		</div>
	</div>
	@endforeach
	</div>
</div>
@endsection