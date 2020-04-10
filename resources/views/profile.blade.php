<html>
	<header>
		<title>{{ __('Profile') }}</title>
	</header>

	<body>
		<h1>{{ __('Profile') }}</h1>
		<p>{{ __('First name') }} : {{ $firstname }}</p>
		<form method="POST" action="{{ route('change_firstname') }}">
			<div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			</div>
			
			<div class="form-group row mb-0">
                        	<div class="col-md-6 offset-md-4">
                                	<button type="submit" class="btn btn-primary">
                                   		{{ __('Change') }}
					</button>
				</div>
			</div>
		</form>
			

		<p>{{ __('Last name') }} : {{ $lastname }}</p>
		<form method="POST" action="{{ route('change_lastname') }}">
			<div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			</div>
			
			<div class="form-group row mb-0">
                        	<div class="col-md-6 offset-md-4">
                                	<button type="submit" class="btn btn-primary">
                                   		{{ __('Change') }}
					</button>
				</div>
			</div>
		</form>

		<form method="POST" action="{{ route('change_email') }}">
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
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Email') }}</label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation" required autocomplete="email">
                            </div>
                        </div>
		</form>

		<form method="POST" action"{{ route('change_password') }}">
 			<div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
		
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
			</div>
			<div class="form-group row">
			    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" autocomplete="new-password">
			    </div>
			</div>
		</form>
                        


