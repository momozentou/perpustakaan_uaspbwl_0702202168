@extends('template')

@section('main')
<div class="container">
    <div class="login-container">
      <h2>Edit Data Siswa</h2>
      <form method="post" action="/edit-siswa">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $siswa->id }}">
        <div class="form-group">
          <label for="email">Nama Siswa</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Siswa" name="nama" value="{{ $siswa->nama_siswa }}">
        </div>
        <div class="form-group">
          <label for="password">NIS</label>
          <input type="text" class="form-control" id="password" placeholder="Masukkan NIS Siswa" name="nis" value="{{ $siswa->nis }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update</button>
      </form>
    </div>
  </div>
@endsection