<?php

include 'db/db.php';
$select_basic = $db->prepare("SELECT * FROM rstate_data WHERE id = '0'");
$select_basic->execute();
$result = $select_basic->fetch(PDO::FETCH_ASSOC);

if(isset($_SESSION['admin']) == 1)
{
	error_reporting(0);
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$first_part = $components[1];
	$second_part = $components[2];

	
	?>
		
	<div class="top">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p class="social d-flex">
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-google"></span></a>
						<a href="#"><span class="icon-pinterest"></span></a>
					</p>
				</div>
				<div class="col d-flex justify-content-end">
					<p class="num"><span class="icon-phone"></span> + 1700 12345 6789</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Comienza Nav -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="../"><img src="../images/logos/<?php echo $result['logo']; ?>" alt="Logo" class="navbar-brand" style="  display: block; margin-left: auto; margin-right: auto; width: 12rem; height: 7.5rem; padding-right: 10px;"></a><a class="navbar-brand" href="../"><?php echo $result['name']; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menú
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php if ($first_part=="/" or $first_part=="") {echo "active"; } else  {echo "noactive";}?>" id="index"><a href="../" class="nav-link">Inicio</a></li>
					<li class="nav-item <?php if ($first_part=="dashboard") {echo "active"; } else  {echo "noactive";}?>" id="index"><a href="admin/dashboard" class="nav-link">Dashboard</a></li>
					<li class="nav-item <?php if ($first_part=="categories") {echo "active"; } else  {echo "noactive";}?>"><a href="../categorias" class="nav-link">Categorias</a></li>
					<li class="nav-item <?php if ($first_part=="agents") {echo "active"; } else  {echo "noactive";}?>"><a href="../agents" class="nav-link">Agentes</a></li>
					<li class="nav-item <?php if ($first_part=="about") {echo "active"; } else  {echo "noactive";}?>"><a href="../about" class="nav-link">Sobre</a></li>
					<li class="nav-item <?php if ($first_part=="contact") {echo "active"; } else  {echo "noactive";}?>"><a href="../contact" class="nav-link">Contacto</a></li>
					<!-- <li class="nav-item cta"><a href="#" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign-In</a></li> -->
					<!-- <li class="nav-item cta cta-colored"><a href="#" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li> -->
				</ul>
			</div>

		</div><!-- Termina contenedor de todo el navbar -->
	</nav>
	<!-- Termina nav -->
    <?php
}
elseif(isset($_SESSION['agent'])==1)
{
	error_reporting(0);
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$first_part = $components[1];
	$second_part = $components[2];
	?>
	<div class="top">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p class="social d-flex">
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-google"></span></a>
						<a href="#"><span class="icon-pinterest"></span></a>
					</p>
				</div>
				<div class="col d-flex justify-content-end">
					<p class="num"><span class="icon-phone"></span> + 1700 12345 6789</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Comienza Nav -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="../"><img src="../images/logos/<?php echo $result['logo']; ?>" alt="Logo" class="navbar-brand" style="  display: block; margin-left: auto; margin-right: auto; width: 12rem; height: 7.5rem; padding-right: 10px;"></a><a class="navbar-brand" href="../"><?php echo $result['name']; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menú
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php if ($first_part=="/" or $first_part=="") {echo "active"; } else  {echo "noactive";}?>" id="index"><a href="../" class="nav-link">Inicio</a></li>
					<li class="nav-item <?php if ($first_part=="categories") {echo "active"; } else  {echo "noactive";}?>"><a href="../categorias" class="nav-link">Categorias</a></li>
					<li class="nav-item <?php if ($first_part=="agents") {echo "active"; } else  {echo "noactive";}?>"><a href="../agents" class="nav-link">Agentes</a></li>
					<li class="nav-item <?php if ($first_part=="about") {echo "active"; } else  {echo "noactive";}?>"><a href="../about" class="nav-link">Sobre</a></li>
					<li class="nav-item <?php if ($first_part=="contact") {echo "active"; } else  {echo "noactive";}?>"><a href="../contact" class="nav-link">Contacto</a></li>
					<!-- <li class="nav-item cta"><a href="#" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign-In</a></li> -->
					<!-- <li class="nav-item cta cta-colored"><a href="#" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li> -->
				</ul>
			</div>

		</div><!-- Termina contenedor de todo el navbar -->
	</nav>
	<!-- Termina nav -->
    <?php
}
else
{
	error_reporting(0);
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$first_part = $components[1];
	$second_part = $components[2];
	?>
	<div class="top">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p class="social d-flex">
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-google"></span></a>
						<a href="#"><span class="icon-pinterest"></span></a>
					</p>
				</div>
				<div class="col d-flex justify-content-end">
					<p class="num"><span class="icon-phone"></span> + 1700 12345 6789</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Comienza Nav -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="../"><img src="../images/logos/<?php echo $result['logo']; ?>" alt="Logo" class="navbar-brand" style="  display: block; margin-left: auto; margin-right: auto; width: 12rem; height: 7.5rem; padding-right: 10px;"></a><a class="navbar-brand" href="../"><?php echo $result['name']; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menú
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php if ($first_part=="/" or $first_part=="") {echo "active"; } else  {echo "noactive";}?>" id="index"><a href="../" class="nav-link">Inicio</a></li>
					<li class="nav-item <?php if ($first_part=="categories") {echo "active"; } else  {echo "noactive";}?>"><a href="../categorias" class="nav-link">Categorias</a></li>
					<li class="nav-item <?php if ($first_part=="agents") {echo "active"; } else  {echo "noactive";}?>"><a href="../agents" class="nav-link">Agentes</a></li>
					<li class="nav-item <?php if ($first_part=="about") {echo "active"; } else  {echo "noactive";}?>"><a href="../about" class="nav-link">Sobre</a></li>
					<li class="nav-item <?php if ($first_part=="contact") {echo "active"; } else  {echo "noactive";}?>"><a href="../contact" class="nav-link">Contacto</a></li>
					<!-- <li class="nav-item cta"><a href="#" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign-In</a></li> -->
					<!-- <li class="nav-item cta cta-colored"><a href="#" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li> -->
				</ul>
			</div>

		</div><!-- Termina contenedor de todo el navbar -->
	</nav>
	<!-- Termina nav -->
<?php
}
?>