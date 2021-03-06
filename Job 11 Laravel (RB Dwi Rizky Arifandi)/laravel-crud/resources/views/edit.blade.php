@extends('master')

<!-- isi title -->
@section('title','Edit Data')

<!-- isi bagian judul halaman -->
@section('judul_halaman','Edit Data Mahasiswa')

<!-- isi bagian konten -->
@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br>
<br>
<form action="/mahasiswa/update" method="POST">
    {{ csrf_field() }}
    @foreach($mahasiswa as $mhs)
    <input type="hidden" name="id" value="{{ $mhs->id }}">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" value="{{ $mhs->nama }}" required="required" name="namamhs"><br>
    </div>
    <div class="form-group">
        <label>NIM</label>
        <input type="number" class="form-control" value="{{ $mhs->nim }}" required="required" name="nimmhs"><br>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" value="{{ $mhs->email }}" required="required" name="emailmhs"><br>
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" class="form-control" value="{{ $mhs->jurusan }}" required="required" name="jurusanmhs"><br>
    </div>
    <input type="submit" class="btn btn-primary float-right" value="Update Data">
    @endforeach
</form>
@endsection