<html>
<head>
<title>RADAR | Lupa Password</title>

<link href="bmkg/css/bootstrap.min.css" rel="stylesheet">
<link href="bmkg/css/signin.css" rel="stylesheet">
<link rel="icon" type="bmkg/images/png" href="bmkg/images/icon.png" />
{{-- Toastr --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>
<body background="bmkg/images/bg.jpg">
<div class="container-fluid">
  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<form class="form-signin" method="POST" action="/notifikasi/post">
  {{-- /notifikasi/post --}}
    @csrf
  <div class="row">
    <div class="col-md-12">
      <img src="bmkg/images/bmkg.png" width="90px" height="90px" style="display: block; margin: auto;">
    </div>
    </div>
    <p></p>
  <h1 class="h6 mb-3 font-weight-bold" style="text-align: center;">Lupa Password</h1>
  <p></p>


    {{-- @if(session('error'))
        <div class="alert alert-succes" role="alert">{{ session('succes') }}</div>
    @endif

    @if(session('succes'))
        <div>{{ session('succes') }}</div>
    @endif --}}

  <input  type="email" id="email" class="form-control" placeholder="Masukkan Email Anda" name="email" value="" required autofocus> <br>
 <button class="btn btn-sm btn-primary btn-block" type="submit"><a class="btn btn-md btn-primary btn-block" role="button">Masuk</a></button>
  <p class="mt-5 mb-3 text-muted">&copy; 2020-Radar EEC BMKG</p>

</form>
<script>
  @if(Session::has('sukses'))
  toastr.success("{{Session::get('sukses')}}", "Selamat")
  @endif
</script>
</body>

</html>