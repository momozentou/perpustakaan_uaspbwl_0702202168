@extends('template')

@section('main')
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" style="float: right">Tambah</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">No. </th>
        <th scope="col">Nama Siswa</th>
        <th scope="col">NIS</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Tanggal Kembali</th>
      </tr>
    </thead>
    <tbody>
      <?php $index = 1; ?>
      @foreach ($pinjam as $pjm)
        <tr>
          <th scope="row">{{ $index++ }}</th>
          <td>{{ $pjm->siswa->nama_siswa }}</td>
          <td>{{ $pjm->siswa->nis }}</td>
          <td>{{ $pjm->buku->judul_buku }}</td>
          <td>{{ $pjm->tanggal_kembali }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/add-pinjam" method="post">
      <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Siswa : </label>
            <select class="form-control" id="recipient-name" name="nama">
              @foreach ($siswa as $s)
                <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Buku : </label>
            <select class="form-control" id="recipient-name" name="judul">
              @foreach ($buku as $b)
                <option value="{{ $b->id }}">{{ $b->judul_buku }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">NIS : </label>
            <input type="date" class="form-control" id="recipient-name" name="tgl_kembali">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection