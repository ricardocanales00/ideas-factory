@extends('layouts.app')

@section('content')
<div class="authentication">
    <div class="sign-in">
        <div class="row no-mrg-horizon">
            <div class="col-md-8 no-pdd-horizon d-none d-md-block">
                <div class="full-height bg" style="background-image: url('https://rockresearch.com/wp-content/uploads/2017/11/event_technology.jpg')">
                    <div class="img-caption">
                        <h1 class="caption-title">We make spectacular</h1>
                        <p class="caption-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Visita nuestro sitio en <a href="http://saludybs.com/ideas-factory">www.saludybs.com/ideas-factory</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 no-pdd-horizon">
                <div class="full-height bg-white height-100">
                    <div class="vertical-align full-height pdd-horizon-70">
                        <div class="table-cell">
                            <div class="pdd-horizon-15">
                                <div class="col-md-12 mrg-left-auto mrg-right-auto">
                                    <img src="images/logo/logo.png" width="100%">
                                </div>
                                <p class="mrg-btm-15 font-size-13 text-center">Ingresa con tu usuario y contrase&ntilde;a</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox font-size-12">
                                                <input id="agreement" name="agreement" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="agreement">Recuérdame</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-warning">Ingresar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="login-footer">
                        <img class="img-responsive inline-block" src="http://miportal.saludybs.com/images/logo/logo.png" width="100" alt="">
                            <span class="font-size-10 pull-right pdd-top-10">¿No cuentas con acceso?<a href="/acceso"> Haz click aquí</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
