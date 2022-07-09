<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
	<link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('fontawesome/css/all.css');?>">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $( function() {
        $( "#date" ).datepicker({
        dateFormat: "yy-mm-dd"
        });
    } );
  </script>
	<style>
		.navbar{
			background-color: #00FFFF;
		}
	</style>
</head>
<body>
    <div class="container shadow">
    <header>
		<h2 class="text-dark mb-20 mt-20" align="center">Administrasi Warga RT 002 / 001</h2>
	</header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item me-4">
						<a class="nav-link active" aria-current="page" href="<?= base_url('/admin/data_warga');?>"><i class="fa-solid fa-house-chimney"></i> Data Warga</a>
					</li>
					<li class="nav-item me-4">
						<a class="nav-link active" aria-current="page" href="<?= base_url('/admin/data_warga/add');?>">Tambah Warga</a>
					</li>
					<li class="nav-item me-4">
						<a class="nav-link active" aria-current="page" href="<?= base_url('/admin/iuran');?>">Kas Warga</a>
					</li>
					<li class="nav-item me-4">
						<a class="nav-link active" href="<?= base_url('/admin/iuran/add');?>">Tambah Iuran</a></li>
					</li>
					<li class="nav-item me-4">
						<a class="nav-link active" aria-current="page" href="">Laporan Kas</a>
					</li>
					<li class="nav-item me-4">
						<a class="nav-link active" href="<?= base_url('/admin/laporan');?>">Jumlah Kas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('/admin/logout');?>">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>