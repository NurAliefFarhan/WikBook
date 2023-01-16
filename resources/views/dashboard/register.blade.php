<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{asset('assets/img/login.jpeg')}}" class="login-card-img" style="width: 100%; height: 100%;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <p class="login-card-description">Sign up your account</p>
                            <form action="#!">
                                <div class="form-group">
                                    <label for="nama" class="sr-only">Nama</label>
                                    <input type="integer" name="nama" id="email" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email adress">
                                </div>
                                <div class="form-group">
                                    <label for="Kota" class="sr-only">Kota</label>
                                    <input type="kota" name="Kota" id="Kota" class="form-control" placeholder="Kota anda">
                                </div>
                                <div class="form-group">
                                    <label for="No.Handphone" class="sr-only">No.Handphone</label>
                                    <input type="integer" name="No.Handphone" id="No.Handphone" class="form-control" placeholder="No. Handphone">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="Password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
                            </form>
                            <p class="login-card-footer-text">Don't have an account? <a href="/login"class="text-reset">Login here</a></p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
