<h1>Hello {{ $user->name }}</h1>
<p>
    Silahkan klik tombol reset password untuk mereset password anda
    <a href="{{ url('reset_password/' .$user->email. '/' .$code) }}">Reset Password</a>
</p>