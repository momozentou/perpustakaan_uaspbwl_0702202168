@extends('template')

@section('main')
<div class="container">
    <div class="login-container">
      <h2>Delete Data Kategori</h2>
      <form method="post" action="/delete-kategori">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $kategori->id }}">
        <div class="form-group">
          <label for="email">Nama Kategori</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" readonly>
        </div>
        <button type="submit" class="btn btn-danger btn-block">Delete</button>
      </form>
    </div>
  </div>
@endsection