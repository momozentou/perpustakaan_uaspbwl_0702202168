<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/login_style.css') }}">
</head>

<body style="background-color: salmon">
  <div class="container" style="margin-top: 180px">
    <div class="login-container">
      <h2>Login</h2>
      <form method="post" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
