@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Historias laborales')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Registrarse') }}</strong></h4>
            
          </div>
          <div class="card-body ">
            <p class="card-description text-center">{{ __('Llene los campos a continuación') }}</p>
            
            <!--Nombre-->
             <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Nombre...') }}" value="{{ old('name') }}" autocomplete="name" required autofocus>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>

<!--apellido-->
            <div class="bmd-form-group{{ $errors->has('last_name') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons"> account_circle</i>
                  </span>
                </div>
                <input type="text" name="last_name" class="form-control"
                 placeholder="{{ __('Apellidos...') }}" value="{{ old('last_name') }}" autocomplete="last_name" required>
              </div>
              @if ($errors->has('last_name'))
                <div id="last_name-error" class="error text-danger pl-3" for="last_name" style="display: block;">
                  <strong>{{ $errors->first('last_name') }}</strong>
                </div>
              @endif
            </div>

         <!--telefono-->
            <div class="bmd-form-group{{ $errors->has('telephone') ? ' has-danger' : '' }}mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons"> smartphone</i>
                  </span>
                </div>
                <input type="text" name="telephone" class="form-control" 
                placeholder="{{ __('Telefono...') }}" value="{{ old('telephone') }}" autocomplete="telephone" required>
              </div>
              @if ($errors->has('telephone'))
                <div id="telephone-error" class="error text-danger pl-3" for="telephone" style="display: block;">
                  <strong>{{ $errors->first('telephone') }}</strong>
                </div>
              @endif
            </div>  
         <!--Numero de cedula -->
           <div class="bmd-form-group{{ $errors->has('cedula') ? ' has-danger' : '' }} mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons"> chrome_reader_mode</i>
                  </span>
                </div>
                <input type="text" name="cedula" class="form-control" 
                placeholder="{{ __('Numero de Cedula...') }}" value="{{ old('cedula') }}" autocomplete="cedula" required>
              </div>
              @if ($errors->has('cedula'))
                <div id="cedula-error" class="error text-danger pl-3" for="cedula" style="display: block;">
                  <strong>{{ $errors->first('cedula') }}</strong>
                </div>
              @endif
            </div>  
       

            <!--direccion-->
          <div class="bmd-form-group{{ $errors->has('adress') ? ' has-danger' : '' }}mt-3" >
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons"> grain</i>
                  </span>
                </div>
                <input type="text" name="adress" class="form-control" 
                placeholder="{{ __('Dirección...') }}" value="{{ old('adress') }}" autocomplete="adress" required>
              </div>
              @if ($errors->has('adress'))
                <div id="adress-error" class="error text-danger pl-3" for="adress" style="display: block;">
                  <strong>{{ $errors->first('adress') }}</strong>
                </div>
              @endif
            </div>  

            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control"
                 placeholder="{{ __('Email...') }}" value="{{ old('email') }}" autocomplete="email" required >
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control"
                 placeholder="{{ __('Contraseña...') }}" autocomplete="new-password" required autofocus>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña...') }}" required autocomplete="new-password" autofocus>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy" {{ old('policy', 1) ? 'checked' : '' }} >
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('Acepto los ') }} <a href="#">{{ __('Terminos y condiciones') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Registrarse') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
