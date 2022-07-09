<!doctype html>
<html lang="en">

<head>
    <title>Presma Web | {{ $title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/animate-css/vivify.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/mooli.min.css">

</head>

<body>

    <div id="body" class="theme-cyan">
        <div class="auth-main">
            <div class="auth_div vivify fadeIn">
                <div class="auth_brand">
                    <a class="navbar-brand" href="#"><img src="assets/images/logologin.png" width="50"
                            class="d-inline-block align-top mr-2" alt=""> PRESMA</a>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-times-circle"></i>
                        {{ session('loginError') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="header">
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" action="/login" method="post">
                            @csrf
                            <div class="form-group c_form_group">
                                <label for="nim">Nim</label>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim"
                                    id="nim" placeholder="Enter your Nim" required value="{{ old('nim') }}"
                                    autofocus>
                                @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group c_form_group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password"
                                    name="password" id="password">
                            </div>

                            <button type="submit" class="btn btn-dark btn-lg btn-block">LOGIN</button>
                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a
                                        href="page-forgot-password.html">Forgot password?</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="animate_lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

    </div>

    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <!-- Vedor js file and create bundle with grunt  -->
    <script>
        $('.choose-skin li').on('click', function() {
            var $body = $('body');
            var $this = $(this);

            var existTheme = $('.choose-skin li.active').data('theme');

            $('.choose-skin li').removeClass('active');
            $body.removeClass('theme-' + existTheme);
            $this.addClass('active');
            var newTheme = $('.choose-skin li.active').data('theme');
            $body.addClass('theme-' + $this.data('theme'));
        });
    </script>
</body>

</html>
