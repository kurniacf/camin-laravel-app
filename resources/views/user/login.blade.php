@extends('layouts.master')

@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-5">Masuk</h3>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{ url('login')  }}" method="post">
                            <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control form-control-lg" />
                                <label class="form-label" for="email">Email</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control form-control-lg" />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="check" />
                                <label class="form-check-label" for="check"> Ingat Password </label>
                            </div>
                            <a href="{{ url('user/profile') }}">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </a>
                            {{ csrf_field() }}

                            <hr class="my-4">
                            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                                    type="submit"><i class="fab fa-google me-2"></i> Login dengan Google</button>
                            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                                    type="submit"><i class="fab fa-facebook-f me-2"></i>Login dengan Facebook</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
