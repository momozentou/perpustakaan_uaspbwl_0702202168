@extends('template')

@section('main')
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" style="float: right">Tambah</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">No. </th>
        <th scope="col">Nama Siswa</th>
        <th scope="col">NIS</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $index = 1; ?>
      @foreach ($siswa as $s)
        <tr>
          <th scope="row">{{ $index++ }}</th>
          <td>{{ $s->nama_siswa }}</td>
          <td>{{ $s->nis }}</td>
          <td>
            <a href="/edit-siswa/{{ $s->id }}"><button class="btn btn-info">Edit</button></a>
            <a href="/delete-siswa/{{ $s->id }}"><button class="btn btn-danger">Delete</button></a>
          </td>
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
      <form action="/add-siswa" method="post">
      <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Siswa : </label>
            <input type="text" class="form-control" id="recipient-name" name="nama">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">NIS : </label>
            <input type="text" class="form-control" id="recipient-name" name="nis">
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