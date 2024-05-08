<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>ARBÓREO - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{url('Assets/css/authenticate.css')}}" />
    <script src="{{ url('Assets/src/auth.js')}}" defer></script>
</head>
<body>
<div class="form-container">
    <div class="form-container__details">
        <div class="form-container__title">Login</div>
        <div class="form-container__subtitle">
            Conecte-se e viage pela nossa Unesp!
        </div>
    </div>
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form__field">
            <label for="email" class="form__label">{{ __('Email Address') }}</label>
            <input id="email" type="email"
                   class="form__input @error('email') is-invalid @enderror"
                   name="email"
                   value="{{ old('email') }}"
                   required
                   autocomplete="email"
                   autofocus/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form__field">
            <label for="password" class="form__label">{{ __('Password') }}</label>
            <input id="password"
                   type="password"
                   class="form__input
                   @error('password') is-invalid @enderror"
                   name="password"
                   required
                   autocomplete="current-password"/>
            <button type="button" class="btn" onclick="passwordOne()"><img src="{{ url('Assets/images/icons/showPassword.png') }}" width="40" alt="showPassword"></button>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" value="submit" class="form__submit {{ __('Register') }}">
            Realizar Login
        </button>
    </form>
    <div class="form-container__line-divider"></div>
    <div class="form-container__links">
        <a href="{{url('start-registration')}}" class="form-container__link">Cadastrar</a>
        <a href="{{ url('forgot-password') }}" class="form-container__link">Forgot Your Password?</a>
    </div>
</div>
</body>
</html>
