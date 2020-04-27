@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-5">
            <div class="card bg-color6 shadow">
                <div class="card-header"> <h2 class="text-center">{{ __('Registrarme') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> <h4>{{ __('Razón social') }} <i class="fas fa-user"></i></h4></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="razon social" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right"> <h4>{{ __('Telefono') }}  <i class="fas fa-phone-volume fa-1x"></i></h4></label>

                            <div class="col-md-6">
                                <input id="telefono" type="number" class="form-control" name="telefono" required autocomplete="telefono" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right"> <h4>{{ __('Dirección') }} <i class="fas fa-map-marker-alt"></i></h4></label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" required autocomplete="direccion" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><h4>{{ __('Correo') }} <i class="fas fa-envelope fa-1x"></i></h4></h4></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><h4>{{ __('Clave') }} <i class="fas fa-key"></i></h4></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> <h4>{{ __('Confirmar clave') }} <i class="fas fa-key"></i></h4></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> <h4>{{ __('Tipo de usuario') }} <i class="fas fa-user-tag"></i></h4></label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                                  </div>
                                  <select class="custom-select" id="inputGroupSelect01" required="" name="rol">
                                    <option selected>seleccione uno...</option>
                                    <option value="entidad reguladora">Entidad reguladora</option>
                                    <option value="centro de atencion">Centro de atención</option>
                                  </select>
                                </div>
                            </div>
                            <input type="hidden" name="tipo" value="entidad">
                        </div>
                        
                        <div class="form-group row">
                            <label for="sistema" class="col-md-4 col-form-label text-md-right"> <h4>{{ __('tiene plataforma propia') }} <i class="fas fa-sync-alt"></i></h4></label>


                            <div class="col-md-6">
                                <br>
                                <div class="custom-control custom-switch">
                                 
                                  <input type="checkbox" class="custom-control-input " id="sistema" width="100">
                                  <label class="custom-control-label" for="sistema">Si. ¿puede compartir información?</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info col-md-12">
                                    <strong>{{ __('Guardar informaciòn') }}</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
