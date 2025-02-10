<!DOCTYPE html>
<html lang="en">

<head>

	<title>Toko Komputer Rasya</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	
	


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Registrasi</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
						<div class="form-group mb-3">
							<label class="floating-label" for="name">Name</label>
							<input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="alamat">Alamat</label>
							<input type="text" name="alamat" value="{{ old('alamat') }}" class="form-control" id="alamat" placeholder="">
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="email">Email</label>
							<input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="no_telp">Nomor Telepon</label>
							<input type="text" name="no_telp" value="{{ old('no_telp') }}" class="form-control" id="no_telp" placeholder="">
                            @error('no_telp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="password">Password</label>
							<input type="password" name="password" class="form-control" id="Password" placeholder="">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
						</div>
                        <div class="form-group mb-4">
                            <label class="floating-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
						<button type="submit" class="btn btn-primary btn-block mb-4">Registrasi</button>
                        </form>
						<p class="mb-2">Sudah mempunyai akun? <a href="auth-signin.html" class="f-w-400">Login</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ripple.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>



</body>

</html>