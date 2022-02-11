<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-AutoCAR - {{ isset($title) ? $title :' ' }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('storage/assets2/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/assets2/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/assets2/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/assets2/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/assets2/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/assets2/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('storage/assets2/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('storage/assets2/images/logo.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{ route('authenticate') }}" method="POST">
                    @csrf
					<span class="login100-form-title">
						Interface de connexion Membres !
					</span>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <strong>Attention !</strong> {{ session('error') }}
                        </div>
                    @endif

                    <div class="card-body">

                        @if (session('error'))
                        <div class="alert alert-warning alert-dismissible">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>

                            <strong> Attention !</strong> {{ session('error') }}
                        </div>
                        @endif
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Connexion
						</button>
					</div>

					<div class="text-center p-t-12 p-b-110">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2 " href="#">
							Username / Password?
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('storage/assets2/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/assets2/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('storage/assets2/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/assets2/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('storage/assets2/vendor/tilt/tilt.jquery.min.js') }}"></script>
<!--===============================================================================================-->
    <script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="{{ asset('storage/assets2/js/main.js') }}"></script>

</body>
</html>

<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->

<!-- <head> -->
	<!-- <meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Auto-Car - {{ isset($title) ? $title :' ' }}</title> -->
	<!-- Favicon-->
	<!-- <link rel="icon" href="{{ asset('storage/assets/images/favicon.ico') }}" type="image/x-icon"> -->
	<!-- Plugins Core Css -->
	<!-- <link href="{{ asset('storage/assets/css/app.min.css') }}" rel="stylesheet"> -->
	<!-- Custom Css -->
	<!-- <link href="{{ asset('storage/assets/css/style.css') }}" rel="stylesheet" /> -->
	<!-- <link href="{{ asset('storage/assets/css/pages/extra_pages.css') }}" rel="stylesheet" /> -->
<!-- </head> -->

<!-- <body> -->
	<!-- <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('authenticate') }}" method="post">
					@csrf
					<span class="login100-form-title p-b-45">
						AutoCar - Connexion
					</span>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <strong>Attention !</strong> {{ session('error') }}
                        </div>
                    @endif
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" required="">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" required="">
						<span class="focus-input100"></span>
						<span class="label-input100">Mot de passe</span>
					</div>

					<div class="flex-sb-m w-full p-t-15 p-b-20">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> Se souvenir de moi
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Mot de passe oublié ?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							se connecter
						</button>
					</div>

					<div class="text-center p-t-45 p-b-20">
						<span class="txt2">
							Ou se connecter par
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fab fa-facebook-f"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('../../../storage/assets/images/pages/bg-01.png');">
				</div>
			</div>
		</div>
	</div> -->

	<!-- Plugins Js -->
	<!-- <script src="{{ asset('storage/assets/js/app.min.js') }}"></script> -->
	<!-- Extra page Js -->
	<!-- <script src="{{ asset('storage/assets/js/pages/examples/pages.js') }}"></script> -->
<!-- </body>

</html> -->

