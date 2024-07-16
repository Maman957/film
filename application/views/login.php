<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kantin LP3I Yogyakarta</title>
	<link href="<?= base_url('assets/img/icon.png') ?>" rel="icon">
	<link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/fontawesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/tooplate.css') ?>">
	<style>
		.bg-biru {
			background: #26156f;
		}

		.bg-merah {
			background: hsl(2.84deg 77.87% 47.84%);
		}

		.bg-white {
			background: white;
		}

		.tm-block {
			padding: 55px 40px;
		}

		.text-red {
			color: hsl(2.84deg 77.87% 47.84%);
		}

		.bg03 {
			background-image: url(<?= base_url("assets/img/dash-bg-04.jpg") ?>);
		}

		.tm-login-col {
			max-width: 500px;
		}

		.btn {
			width: 100%;
			box-sizing: border-box;
			/* Menghitung padding dan border dalam total lebar */
			display: block;
			/* Mengubah tombol menjadi elemen blok agar mengambil lebar penuh */
			margin-left: auto;
			/* Meletakkan tombol di tengah horizontal */
			margin-right: auto;
			/* Meletakkan tombol di tengah horizontal */
		}

		.password-container {
			position: relative;
		}

		.password-toggle {
			position: absolute;
			top: 50%;
			left: 90%;
			transform: translateY(-50%);
			cursor: pointer;
		}

		.black-icon {
			color: black;
		}
	</style>
</head>

<body class="bg03">
	<div class="container">
		<div class="row tm-mt-big">
			<div class="col-12 mx-auto tm-login-col">
				<div class="bg-biru tm-block">
					<div class="row">
						<div class="col-12 text-center ">
							<img src="<?= base_url('assets/img/logo.png') ?>" height="40px">
						</div>
					</div><br>
					<div class="row">
						<div class="col-12 text-white">
							<?= $this->session->flashdata('message'); ?>
							<form class="tm-login-form" method="post" action="<?= base_url('proses_login') ?>">
								<label for="username" class="col-form-label">Username</label>
								<input name="username" type="text" class="form-control validate" id="username" value="" required>
								<label for="password" class="col-form-label">Password</label>
								<div class="input-group">
									<input name="password" type="password" class="form-control validate" id="password" value="" required>
									<i class="password-toggle fas fa-eye-slash black-icon" onclick="togglePasswordVisibility()"></i>
								</div>
								<br>
								<div class="input-group mt-2">
									<button type="submit" class="btn btn-primary bg-biru text-white mx-auto">Masuk</button>
								</div>
							</form>
							<br>
							<div class="text-center">
								<p>
									Belum punya akun?
									<a rel="nofollow" href="<?= base_url('daftar') ?>" class="text-white tm-footer-link">Daftar</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="row tm-mt-big ">
			<div class="col-12 font-weight-light text-center ">
				<p class="d-inline-block tm-bg-transparant text-white py-2 px-4 bg-merah">
					Copyright &copy; 2024 . Created by
					<a rel="nofollow" href="https://www.instagram.com/achmad_957/" class="text-white tm-footer-link">Maman957</a>
				</p>
			</div>
		</footer>
	</div>
	<script>
		function togglePasswordVisibility() {
			var passwordInput = document.getElementById('password');
			var passwordToggle = document.querySelector('.password-toggle');

			if (passwordInput.type === 'password') {
				passwordInput.type = 'text';
				passwordToggle.classList.remove('fa-eye-slash');
				passwordToggle.classList.add('fa-eye');
			} else {
				passwordInput.type = 'password';
				passwordToggle.classList.remove('fa-eye');
				passwordToggle.classList.add('fa-eye-slash');
			}
		}
	</script>
</body>

</html>