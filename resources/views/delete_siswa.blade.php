@extends('template')

@section('main')
<div class="container">
    <div class="login-container">
      <h2>Delete Data Siswa</h2>
      <form method="post" action="/delete-kategori">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $siswa->id }}">
        <div class="form-group">
          <label for="email">Nama Siswa</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Siswa" name="nama" value="{{ $siswa->nama_siswa }}" readonly>
        </div>
        <div class="form-group">
          <label for="password">NIS</label>
          <input type="text" class="form-control" id="password" placeholder="Masukkan NIS Siswa" name="nis" value="{{ $siswa->nis }}" readonly>
        </div>
        <button type="submit" class="btn btn-danger btn-block">Delete</button>
      </form>
    </div>
  </div>
@endsection