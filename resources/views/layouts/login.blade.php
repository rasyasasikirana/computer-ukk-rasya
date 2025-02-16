<!DOCTYPE html>
<html lang="en">

<head>

	@include('layouts.header')
	@include('layouts.headerbottom')

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Login</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email</label>
							<input type="email" name="email" value="{{old('email')}}" class="form-control" id="Email" placeholder="">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" name="password" value="{{old('password')}}" class="form-control" id="Password" placeholder="">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4">Login</button>
                        </form>
						<p class="mb-0 text-muted">Tidak mempunyai akun? <a href="{{ route('register') }}" class="f-w-400">Registrasi</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/ripple.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>

</body>

</html>
