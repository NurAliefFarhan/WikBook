@extends('layout-login')
@section('content')

    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <h4 class="title text-center mt-4">Register into account</h4>
                    <form class="form-box px-3" method="POST" action="{{route('register.post')}}">
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




                        <div class="form-input">
                            <span><i class="fa fa-user"></i></span>
                            <input type="text" name="nama" placeholder="Nama Lengkap" tabindex="10" required>
                        </div>

                        <div class="form-input">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="email" placeholder="Email Address" tabindex="10" required>
                        </div>

                        <div class="form-input">
                            <span><i class="fa-solid fa-map-location-dot"></i></span>
                            <input type="text" name="kota" placeholder="Asal Kota" tabindex="10" required>
                        </div>

                        <div class="form-input">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <input type="number" name="nohp" placeholder="No.Handphone" tabindex="10" required>
                        </div>

                        <div class="form-input">
                            <span><i class="fa fa-key"></i></span>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-block text-uppercase">Register</button>
                        </div>
                        <hr class="my-4">

                        <div class="text-center mb-2">
                            Don't have an account?
                            <a href="/login" class="register-link">Login here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection 