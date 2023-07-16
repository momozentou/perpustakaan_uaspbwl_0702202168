@extends('template')

@section('main')
<div class="container">
    <div class="login-container">
      <h2>Edit Data Kategori</h2>
      <form method="post" action="/edit-kategori">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $kategori->id }}">
        <div class="form-group">
          <label for="email">Nama Kategori</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update</button>
      </form>
    </div>
  </div>
@endsection