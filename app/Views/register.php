<!-- load all modules css -->
<?= $this->include('user/components/head') ?>


<!-- login -->
<div class="container">
	<div class="row align-items-center vh-100">
		<div class="col-6 mx-auto">
			<div class="card text">
				<div class="card-header text-center">
					Register CRUD Sederhana
				</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Alamat Email</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" class="form-control" placeholder="Masukan username">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="text-muted">
							<small>Belum Mempunyai Akun? <a href="http://example.com/">Klik Disini</a></small> 
						</div>
						<a href="/" class="btn btn-primary mt-2" role="button">Register</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- load end body -->
<?= $this->include('user/components/body') ?>
