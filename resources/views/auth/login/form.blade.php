<form method="POST" action="{{ route('user.login') }}" id="login-form">
    @csrf
    <div class="row mb-3">
        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('labels.user.phone') }}</label>
        <div class="col-md-6">
            <input id="phone" type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('labels.user.password') }}</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-8 me-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('labels.user.rememberme') }}
                </label>
            </div>
        </div>
    </div>
    @if (Route::is('user.login'))
    <div class="row mb-3">
        <div class="col-md-8 me-auto">
            <button type="submit" class="btn btn-sm btn-primary">
                {{ __('buttons.login') }}
            </button>
        </div>
    </div>
    @endif
    <div class="row mb-0">
        <div class="col-md-8">
            <p>
                {{ __('labels.user.forgotorregister') }}
            </p>
        </div>
    </div>
</form>