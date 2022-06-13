@extends('master')

@section('konten')
<div class="container">
    <h2>Input Data Mahasiswa</h2>
    <form action="input" method="post" class="form-input">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="text" name="email" id="email">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="nrp">NIM</label>
                <input type="text" name="nrp" id="nrp">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Rumah</label>
                <input type="text" name="alamat" id="alamat">
            </div>
        </div>
        <br>
        <button type="submit" class="btn-submit-data">Submit Data</button>
    </form>
</div>
@endsection