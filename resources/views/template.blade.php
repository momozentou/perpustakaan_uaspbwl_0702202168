<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Template</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/dashboard_style.css') }}">
  <!-- Custom CSS -->
</head>

<body>
  <nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand">SMP N 1 Medan</a>
    <form class="form-inline" action="/logout" method="post">
      {{ csrf_field() }}
      <button class="btn btn-outline-danger my-2 my-sm-0 pr-5 pl-5 pb-2" type="submit">logout</button>
    </form>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 sidebar bg-dark text-white pt-5">
        <ul class="pt-2">
          <li>
            <a href="/">Dashboard</a>
          </li>
          <li>
            <a href="/siswa">Siswa</a>
          </li>
          <li>
            <a href="/buku">Buku</a>
          </li>
          <li>
            <a href="/kategori">Kategori</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10 main-content">
        
        @yield('main')

      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
