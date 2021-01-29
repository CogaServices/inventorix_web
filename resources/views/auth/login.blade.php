@extends('layouts.app')

@section('content')

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="assets/images/logo-size.jpg" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="row align-items-center ">
					<div class="col-md-12">
						<div class="card-body">
							<h4 class="mb-3 f-w-400">{{__('Se Connecter')}}</h4>
							<hr>
							<div class="form-group mb-3">
								<input type="email" class="form-control @error('email') is-invalid @enderror" id="email"  name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Address Email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-group mb-4">
								<input type="password" class="form-control @error('password') is-invalid @enderror" id="password"  name="password" required autocomplete="current-password" placeholder="{{ __('Mot de passe') }}">
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="custom-control custom-checkbox text-left mb-4 mt-2">
								<input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="custom-control-label" for="remember"> {{ __('Se souvenir de moi') }}</label>
							</div>
							<button type ="submit" class="btn btn-block btn-primary mb-4">{{ __('Connexion') }}</button>
							<hr>
							@if (Route::has('password.request'))
								<p class="mb-2 text-muted">Mot de passe Oublié?
									<a href="{{ route('password.request') }}" class="f-w-400">
										{{ __('Réinitialiser') }}
									</a>
                                </p>
                                
							@endif
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

@endsection
