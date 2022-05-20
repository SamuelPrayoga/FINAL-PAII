<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Rektor IT Del | Login</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/icons/itdel.png" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <style>
        body {
            background-color: #19123B
        }

        .card {
            border: none;
            border-top: 5px solid rgb(60, 34, 156);
            background: rgba(0, 0, 0, 0.65);
            color: #d1d1d1;
        }

        p {
            font-weight: 600;
            font-size: 15px
        }

        .division {
            float: none;
            position: relative;
            margin: 30px auto 20px;
            text-align: center;
            width: 100%;
            box-sizing: border-box
        }

        .division .line {
            border-top: 1.5px solid #57557A;
            ;
            position: absolute;
            top: 13px;
            width: 85%
        }

        .line.l {
            left: 52px
        }

        .line.r {
            right: 45px
        }

        .division span {
            font-weight: 600;
            font-size: 14px
        }

        .myform {
            padding: 0 25px 0 33px
        }

        .form-control {
            border: 1px solid #57557A;
            border-radius: 35px;
            background: rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
            letter-spacing: 1px
        }

        .form-control:focus {
            border: 1px solid #57557A;
            border-radius: 35px;
            box-shadow: none;
            background: rgba(0, 0, 0, 0.5);
            color: rgb(216, 216, 216);
            letter-spacing: 1px
        }

        .bn {
            text-decoration: underline
        }

        .bn:hover {
            cursor: pointer
        }

        .form-check-input {
            margin-top: 8px !important
        }

        .btn-primary {
            background: linear-gradient(135deg, #4b6cb7 0%, #182848 51%, #4b6cb7 100%);
            border: none;
            border-radius: 23px
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #2b5876 0%, #4e4376 51%, #2b5876 100%);
            border: none;
        }

        small {
            color: #F2CEFF
        }

        .far.fa-user {
            font-size: 13px
        }

        .video-wrap {
            z-index: -100;
        }

        .custom-video {
            position: absolute;
            top: 0;
            left: 0;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>
    <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
            <source src="{{ asset('videos/Mengenal Institut Teknologi Del.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                    <p class="text-center mb-3 mt-2">DASHBOARD REKTORAT INSTITUT TEKNOLOGI DEL</p>
                    <div class="row mx-auto ">
                        <p class="text-center mb-3 mt-2">Aplikasi ini digunakan oleh Rektorat IT Del untuk monitoring
                            kampus</p>
                    </div>
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div class="line l"></div>
                            </div>
                            <div class="col-6"><span>Login Akun</span></div>
                            <div class="col-3">
                                <div class="line r"></div>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>

                    <form class="myform" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group form-check">
                                </div>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <div class="form-group mt-3"> <button type="submit" class="btn btn-block btn-primary btn-lg"
                                href=""><small><i class="fas fa-key pr-2"></i>Login</small></button> </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>

</html>
