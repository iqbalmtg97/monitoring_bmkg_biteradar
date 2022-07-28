<html>
<head>
<title>RADAR | Login</title>

<link href="bmkg/css/bootstrap.min.css" rel="stylesheet">
<link href="bmkg/css/signin.css" rel="stylesheet">
<link rel="icon" type="bmkg/images/png" href="bmkg/images/icon.png" />
    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>
<body background="bmkg/images/bg.jpg">
 <div class="container-fluid">
<form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
  <div class="row">
    <div class="col-md-12">
      <img src="bmkg/images/bmkg.png" width="90px" height="90px" style="display: block; margin: auto;">
    </div>
    </div>
    <p></p>
  <h1 class="h6 mb-3 font-weight-bold" style="text-align: center;">Masuk ke Sistem Monitoring Radar</h1>
  <p></p>
  {{-- <label for="inputEmail" class="sr-only">Nama Pengguna</label> --}}
  <input  type="name" id="name" class="form-control" placeholder="Nama Pengguna" name="name" value="{{ old('name') }}" required autofocus>
  {{-- <label for="inputPassword" class="sr-only">Password</label> --}}
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya!
    </label>
    <br>
  @if (Route::has('password.request'))
  <a href="/lupa_password" class="badge badge-danger">Lupa Password?</a>
  @endif
  </div>
 <button class="btn btn-sm btn-primary btn-block" type="submit"><a class="btn btn-md btn-primary btn-block" role="button">Masuk</a></button>
  <p class="mt-5 mb-3 text-muted">&copy; 2020-Radar EEC BMKG</p>

</form>

<script>
  @if(Session::has('sukses'))
  toastr.success("{{Session::get('sukses')}}", "Selamat")
  @endif
</script>
<script>
  @if(Session::has('gagal'))
  toastr.error("{{Session::get('gagal')}}", "Gagal")
  @endif
</script>
</body>

</html>
