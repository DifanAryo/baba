<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist')}}/css/adminlte.min.css">
    
    
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Sign </b> In </a>
        </div>
        @include('app-layout.alert')
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Hi there! Nice To see you again </p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"  name="email">
                        <div class="input-group-append">
                            {{-- <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="new-password">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary toggle-password">
                                    <i class="fas fa-eye"></i> <!-- Ikon mata terbuka -->
                                </button>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const togglePassword = document.querySelector('.toggle-password');
                            const passwordInput = document.querySelector('#password');
                            const eyeIcon = togglePassword.querySelector('.fa-eye');
                    
                            togglePassword.addEventListener('click', function() {
                                if (passwordInput.type === 'password') {
                                    passwordInput.type = 'text';
                                    eyeIcon.classList.remove('fa-eye'); // Hapus kelas ikon mata terbuka
                                    eyeIcon.classList.add('fa-eye-slash'); // Tambahkan kelas ikon mata tertutup
                                } else {
                                    passwordInput.type = 'password';
                                    eyeIcon.classList.remove('fa-eye-slash'); // Hapus kelas ikon mata tertutup
                                    eyeIcon.classList.add('fa-eye'); // Tambahkan kelas ikon mata terbuka
                                }
                            });
                        });
                    </script>
                    
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                        <div class="icheck-primary">
                            <a href="#">Fotgot Password</a>
                        </div>
                        </div>
                         
                            
                    <div class="row">
                        <div class="col-12">
                            <a href="http://127.0.0.1:8000/register">Sign Up</a>      

                            
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('AdminLTE/plugins')}}/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE/dist')}}/js/adminlte.min.js"></script>
</body>

</html>
