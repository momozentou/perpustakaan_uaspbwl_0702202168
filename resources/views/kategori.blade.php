@extends('template')

@section('main')
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" style="float: right">Tambah</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">No. </th>
        <th scope="col">Nama Kategori</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $index = 1; ?>
      @foreach ($kategori as $k)
        <tr>
          <th scope="row">{{ $index++ }}</th>
          <td>{{ $k->nama_kategori }}</td>
          <td>
            <a href="/edit-kategori/{{ $k->id }}"><button class="btn btn-info">Edit</button></a>
            <a href="/delete-kategori/{{ $k->id }}"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/add-kategori" method="post">
      <div class="modal-body">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Kategori : </label>
            <input type="text" class="form-control" id="recipient-name" name="nama_kategori">
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