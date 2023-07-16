@extends('template')

@section('main')
<div class="container">
    <div class="login-container">
      <h2>Delete Data Buku</h2>
      <form method="post" action="/delete-buku">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $buku->id }}">
        <div class="form-group">
          <label for="email">Nama Siswa</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Siswa" name="judul" value="{{ $buku->judul_buku }}" readonly>
        </div>
        <div class="form-group">
          <label for="password">NIS</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Siswa" name="judul" value="{{ $buku->kategoriBuku->nama_kategori }}" readonly>
        </div>
        <button type="submit" class="btn btn-danger btn-block">Delete</button>
      </form>
    </div>
  </div>
@endsection