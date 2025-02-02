@extends('layouts.master')

@section('content')
    <div class="row d-flex justify-content-center align-items-center h-100 mb-3">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Daftar</p>
                            <form class="mx-1 mx-md-4" action="{{ route('register.action') }}" method="post">
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}"/>
                                        <label class="form-label" for="name">Nama</label>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}"/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <input type="password" id="password" class="form-control" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="check">
                                        Saya menyetujui <a href="#!">Syarat & Ketentuan</a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Buat Akun</button>
                                    <a class="btn btn-danger" href="{{ url('user/profile') }}">Back</a>
                                </div>
                                {{ csrf_field() }}
                            </form>
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                            <img src="https://res.cloudinary.com/kurniacf/image/upload/v1659357459/signup_qaqt0j.png"
                                 class="img-fluid" alt="Daftar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
