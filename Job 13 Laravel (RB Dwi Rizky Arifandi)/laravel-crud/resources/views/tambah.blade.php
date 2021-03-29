@extends('master')
<!-- isi title -->
@section('title', 'Tambah Data')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Tambah Data Mahasiswa')

<!-- isi bagian konten -->
@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br />
<br />

<!-- menampilkan error validasi -->
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="/mahasiswa/simpan" method="post">
    {{csrf_field()}}

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"><br />
    </div>
    <div class="form-group">
        <label for="nim">NIM</label>
        <input type="number" class="form-control" name="nim" value="{{ old('nim') }}"><br />
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}"><br />
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" value="{{ old('jurusan') }}"><br />
    </div>
    <button type="submit" class="btn btn-primary float-right" value="Tambah">Tambah Data</button>
</form>
@endsection