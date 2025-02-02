<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Navbar Dropdown Login and Signup Form with Social Buttons</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }
        .form-control {
            box-shadow: none;
            font-weight: normal;
            font-size: 13px;
        }
        .navbar {
            background: #fff;
            padding-left: 16px;
            padding-right: 16px;
            border-bottom: 1px solid #dfe3e8;
            border-radius: 0;
            margin-bottom: 30px;
        }
        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }
        .navbar .navbar-brand {
            padding-left: 0;
            font-size: 20px;
            padding-right: 50px;
        }
        .navbar .navbar-brand b {
            color: #33cabb;
        }
        .navbar .form-inline {
            display: inline-block;
        }
        .navbar a {
            color: #888;
            font-size: 15px;
        }
        .search-box {
            position: relative;
        }
        .search-box input {
            padding-right: 35px;
            border-color: #dfe3e8;
            border-radius: 4px !important;
            box-shadow: none
        }
        .search-box .input-group-text {
            min-width: 35px;
            border: none;
            background: transparent;
            position: absolute;
            right: 0;
            z-index: 9;
            padding: 7px;
            height: 100%;
        }
        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
        }
        .navbar .sign-up-btn {
            min-width: 110px;
            max-height: 36px;
        }
        .navbar .dropdown-menu {
            color: #999;
            font-weight: normal;
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0,0,0,.05);
        }
        .navbar a, .navbar a:active {
            color: #888;
            padding: 8px 20px;
            background: transparent;
            line-height: normal;
        }
        .navbar .navbar-form {
            border: none;
        }
        .navbar .action-form {
            width: 280px;
            padding: 20px;
            left: auto;
            right: 0;
            font-size: 14px;
        }
        .navbar .action-form a {
            color: #33cabb;
            padding: 0 !important;
            font-size: 14px;
        }
        .navbar .action-form .hint-text {
            text-align: center;
            margin-bottom: 15px;
            font-size: 13px;
        }
        .navbar .btn-primary, .navbar .btn-primary:active {
            color: #fff;
            background: #33cabb !important;
            border: none;
        }
        .navbar .btn-primary:hover, .navbar .btn-primary:focus {
            color: #fff;
            background: #31bfb1 !important;
        }
        .navbar .social-btn .btn, .navbar .social-btn .btn:hover {
            color: #fff;
            margin: 0;
            padding: 0 !important;
            font-size: 13px;
            border: none;
            transition: all 0.4s;
            text-align: center;
            line-height: 34px;
            width: 47%;
            text-decoration: none;
        }
        .navbar .social-btn .facebook-btn {
            background: #507cc0;
        }
        .navbar .social-btn .facebook-btn:hover {
            background: #4676bd;
        }
        .navbar .social-btn .twitter-btn {
            background: #64ccf1;
        }
        .navbar .social-btn .twitter-btn:hover {
            background: #4ec7ef;
        }
        .navbar .social-btn .btn i {
            margin-right: 5px;
            font-size: 16px;
            position: relative;
            top: 2px;
        }
        .or-seperator {
            margin-top: 32px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }
        .or-seperator b {
            color: #666;
            padding: 0 8px;
            width: 30px;
            height: 30px;
            font-size: 13px;
            text-align: center;
            line-height: 26px;
            background: #fff;
            display: inline-block;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            position: relative;
            top: -15px;
            z-index: 1;
        }
        .navbar .action-buttons .dropdown-toggle::after {
            display: none;
        }
        .form-check-label input {
            position: relative;
            top: 1px;
        }
        @media (min-width: 1200px){
            .form-inline .input-group {
                width: 300px;
                margin-left: 30px;
            }
        }
        @media (max-width: 768px){
            .navbar .dropdown-menu.action-form {
                width: 100%;
                padding: 10px 15px;
                background: transparent;
                border: none;
            }
            .navbar .form-inline {
                display: block;
            }
            .navbar .input-group {
                width: 100%;
            }
        }
    </style>
    <script>
        // Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".action-buttons .dropdown-menu", function(e){
            e.stopPropagation();
        });
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="{{ url('/') }}" class="navbar-brand">Keranjang<b>Pintar</b></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <a href="{{ url('/') }}" class="nav-item nav-link">Beranda</a>
            <a href="#" class="nav-item nav-link">Tentang Kami</a>
            <div class="dropdown nav-item">
                <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Servis</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Antar Sampai Rumah</a>
                    <a href="#" class="dropdown-item">Take Away</a>
                    <a href="#" class="dropdown-item">Di Tempat Serba Gembira</a>
                </div>
            </div>
            <a href="#" class="nav-item nav-link active">Promo</a>
            <a href="#" class="nav-item nav-link">Keranjang Belanda</a>
            <a href="#" class="nav-item nav-link">Kontak Kami</a>
        </div>
        <div class="navbar-nav ml-auto action-buttons">
            <a href="{{ url('login') }}" class="nav-link dropdown-toggle mr-4">Masuk</a>
            <a href="{{ url('register') }}" class="btn btn-primary sign-up-btn">Daftar</a>
            <a href="{{ url('user/logout') }}" class="btn btn-outline-danger">Keluar</a>
        </div>
    </div>
</nav>
</body>
</html>
