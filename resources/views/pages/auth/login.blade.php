<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>SIMS</title>


    <link href="{{asset('assets/logo/logo.jpg') }}" rel="shortcut icon">
    <!-- Site favicon -->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS -->
    <link href="{{asset('assets/styles/core.css') }}" rel="stylesheet">
    <link href="{{asset('assets/styles/style-login.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <!-- <div class="d-flex align-items-center flex-wrap justify-content-center"> -->
        <!-- <div class="container"> -->
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-box">
                        @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <form action="login" method="post">
                            <div class="login-title">
                                <h2 class="text-center text-primary" style="color: #000000 !important;">
                                    <img src="{{asset('assets/logo/frame_logo_login.png') }}" alt="" style="margin-top:-7px; margin-right:6px;">SIMS Web App
                                </h2>
                                <br>
                                <h3 class="text-center text-primary" style="color: #000000 !important;">Masuk atau buat akun untuk memulai</h3>
                            </div>
                            @csrf
                            <div class="input-group custom">
                                <input type="email" class="form-control form-control-lg" placeholder="@ masukan email anda" required
                                    name="email">
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg"  style="font-family: 'Font Awesome 5 Free';" placeholder=" &#xf023; masukan password anda" required name="password" id="password">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="far fa-eye-slash" id="togglePassword"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-lg btn-block"
                                            style="color: white;background-color: #f13b2f;">Masuk</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-md-1 col-lg-7">
                    <img src="{{asset('assets/logo/frame_login.png') }}" alt="">
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
    <!-- js -->
    <script src="{{asset('assets/scripts/core.js') }}"></script>
    <script src="{{asset('assets/scripts/script.min.js') }}"></script>
    <script src="{{asset('assets/scripts/process.js') }}"></script>
    <script src="{{asset('assets/scripts/layout-settings.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // Mengubah type input menjadi 'text' atau 'password'
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // Mengubah ikon mata
        this.classList.toggle('fa-eye');
    });
</script>

</body>

</html>