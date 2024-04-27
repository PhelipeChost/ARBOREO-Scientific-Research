<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>ARBÓREO - Recuperar conta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('Assets/css/forgotPass.css')}}" />
    <script src="{{ url('Assets/src/auth.js')}}" defer></script>
</head>
<body>
<div class="form-container">
    <div class="form-container__details">
        <div class="form-container__title">Esqueci minha Senha</div>
    </div>
    <form class="form" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <div class="form__field">

            <label for="email" class="form__label">{{ __('Verify Your Email Address') }}</label>
            <input id="email" type="email"
                   class="form__input @error('email') is-invalid @enderror"
                   name="email"
                   value="{{ old('email') }}"
                   required
                   autocomplete="email"
                   autofocus/>
        </div>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif
        <div class="form__field">
        {{ __('Antes de continuar, verifique se há um link de verificação em seu e-mail.') }}
        </div>
        <button type="submit" value="submit" class="form__submit {{ __('click here to request another') }}">
            Enviar Email
        </button>
    </form>
    <div class="form-container__line-divider"></div>
</div>
</body>
</html>
