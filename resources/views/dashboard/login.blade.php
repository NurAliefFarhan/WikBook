<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <h4 class="title text-center mt-4">
                        Login into account
                    </h4>
                    <form class="form-box px-3" method="POST" action="{{route('login.auth')}}">
                        @csrf
                        @if ($errors->any())
                        {{-- alert kalau tidak di isi, akan muncul alert denger  --}}
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 

                        @if(Session::get('success'))
                            <div class="alert alert-success w-70">
                                {{Session::get('success')}} 
                            </div>
                        @endif


                          <!-- fail, jika gagal login --> 
                        @if(Session::get('loginFail'))
                            <div class="alert alert-danger w-70">
                                {{Session::get('loginFail')}} 
                            </div>
                        @endif



                        <div class="form-input">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="email" placeholder="Email Address" tabindex="10" required>
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-key"></i></span>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-block text-uppercase">Login</button>
                        </div>
                        <hr class="my-4">

                        <div class="text-center mb-2">
                            Don't have an account?
                            <a href="/register" class="register-link">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
