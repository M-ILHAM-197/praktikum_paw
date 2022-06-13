@extends('master')

@section('konten')
<div class="container">
    <h2>Input Data Mahasiswa</h2>
    @foreach($mahasiswa as $m)
    <form action="{{ url('index/update') }}" method="post" class="form-input">
        {{ csrf_field() }}
        <input type="hidden" name="no" value="{{ $m->no}}">
        <div class="row">
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" id="nama" value="{{ $m->nama }}">
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="text" name="email" id="email" value="{{ $m->email}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="nrp">NIM</label>
                <input type="text" name="nrp" id="nrp" value="{{ $m->nrp}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Rumah</label>
                <input type="text" name="alamat" id="alamat" value="{{ $m->alamat}}">
            </div>
        </div>
        <br>
        <button type="submit" class="btn-submit-data">Simpan Data</button>
    </form>
    @endforeach
</div>
@endsection