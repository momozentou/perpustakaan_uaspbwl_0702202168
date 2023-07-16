@extends('template')

@section('main')
<div class="container">
    <div class="login-container">
      <h2>Edit Data Buku</h2>
      <form method="post" action="/edit-buku">
        {{ csrf_field() }}
        {{ dd($book) }}
        <input type="hidden" name="id" value="{{ $book->id }}">
        <div class="form-group">
          <label for="email">Nama Siswa</label>
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Siswa" name="judul" value="{{ $book->judul_buku }}">
        </div>
        <div class="form-group">
          <label for="password">NIS</label>
          <select class="form-control" id="password" placeholder="Masukkan NIS Siswa" name="kategori">
            @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update</button>
      </form>
    </div>
  </div>
@endsection