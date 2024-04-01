<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Login - BPBD Kaltim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('lgn/assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('lgn/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('lgn/assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('lgn/assets/img/favicon.png')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('lgn/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('lgn/assets/css/skins/default.css')}}">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 1 start -->
<div class="login-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-section">
                    <div class="form-inner">
                        <a href="#" class="logo">
                            <h1><strong>PPID - BPBD KALTIM</strong></h1>
                        </a>
                        <h4>Login Ke Akun Anda</h4>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group form-box clearfix">
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" aria-label="Email Address" autofocus>
                                <i class="flaticon-mail-2"></i>

                                @error('email')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group form-box clearfix">
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" placeholder="Password" aria-label="Password">
                                <i class="flaticon-password"></i>

                                @error('password')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group form-box clearfix">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-theme"><span>Login</span></button>
                            </div>
                        </form>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 1 end -->

<!-- External JS libraries -->
<script src="{{asset('lgn/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('lgn/assets/js/popper.min.js')}}"></script>
<script src="{{asset('lgn/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Custom JS Script -->
</body>
</html>
