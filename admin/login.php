<?php

	session_start();
    include '../db/db.php';
    if(isset($_SESSION['admin'])){
        header('Location: ../index');
    }
    if(isset($_SESSION['agent'])){
        header('Location: ../index');
    }

	if(isset($_REQUEST['btn_login']))	
	{
		$email		= $_REQUEST["txt_email"];	//textbox nombre "txt_email"
		$password	= $_REQUEST["txt_password"];	//textbox nombre "txt_password"
		$password 	= hash('sha512', $password);
		$role		= $_REQUEST["txt_role"];		//select opcion nombre "txt_role"
		if(empty($email))
		{						
			$errorMsg[]="Por favor ingrese Email";	//Revisar email
		}
		else if(empty($password))
		{
			$errorMsg[]="Por favor ingrese Password";	//Revisar password vacio
		}
		else if(empty($role))
		{
			$errorMsg[]="Por favor seleccione rol ";	//Revisar rol vacio
		}
		else if($email AND $password AND $role)
		{
			try
			{
				$select_stmt=$db->prepare("SELECT email, pwd, role FROM users WHERE email=:uemail AND pwd=:upassword AND role=:urole"); 
				$select_stmt->bindParam(":uemail",$email);
				$select_stmt->bindParam(":upassword",$password);
				$select_stmt->bindParam(":urole",$role);
				$select_stmt->execute();	//execute query		
				while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))	
				{
					$dbemail	= $row["email"];
					$dbpassword	= $row["pwd"];
					$dbrole		= $row["role"];
				}
				if($email!=null AND $password!=null AND $role!=null)	
				{
					if($select_stmt->rowCount()>0)
					{
						if($email == $dbemail and $password == $dbpassword and $role == $dbrole)
						{
							switch($dbrole)		//inicio de sesión de usuario base de roles
							{
								case "2":
									$_SESSION["admin"]=$email;			
									$loginMsg="Administrador logueado; redirigiendo...";	
										header("refresh:2; ../");	
									break;
								case "1";
									$_SESSION["agent"]=$email;				
									$loginMsg="Agente logueado; redirigiendo...";		
									header("refresh:2; ../");	
									break;	
								default:
									$errorMsg[]="Correo electrónico o contraseña o rol incorrectos";
							}
						}
						else
						{
							$errorMsg[]="Correo electrónico o contraseña o rol incorrectos";
						}
					}
					else
					{
						$errorMsg[]="Correo electrónico o contraseña o rol incorrectos";
					}
				}
			}
			catch(PDOException $e)
			{
				$e->getMessage();
			}		
		}
		else
		{
			$errorMsg[]="Correo electrónico o contraseña o rol incorrectos";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Iniciar sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include '../links.php'; ?>
		<style type="text/css">

			body {
				background-image: url("../images/bg.jpg");
			}

			.login-form {
				width: 25rem;
				margin: auto auto auto auto;
			}
		    .login-form form {
		    	margin-bottom: 15px;
		        background: #f7f7f7;
		        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		        padding: 25px;
		        border-radius: 30px;
		    }
		    .login-form h2 {
		        margin: 0 0 15px;
						color: white;
		    }
		    .form-control, .btn {
		        min-height: 38px;
		        border-radius: 2px;
		    }
		    .btn {        
		        font-size: 15px;
		        font-weight: bold;
		    }
		</style>
    </head>
    <body>
        <?php include '../nav.php'; ?>
		<div class="wrapper">
			<div class="container">
				<div class="col-lg-12">
					<?php
						if(isset($errorMsg))
						{
							foreach($errorMsg as $error)
							{
					?>
								<div class="alert alert-danger">
									<strong><?php echo $error; ?></strong>
								</div>
					<?php
							}
						}
						if(isset($loginMsg))
						{
					?>
						<div class="alert alert-success">
							<strong>ÉXITO ! <?php echo $loginMsg; ?></strong>
						</div>
					<?php
					}
					?> 
					<div class="login-form">
						<center><h2 class="col-lg-7 col-sm-7 pt-4 d-flex">Iniciar sesión</h2></center>
						<form method="post" class="form-horizontal col-lg-12">
							<div class="form-group">
								<label class="col-sm-6 text-left">Email</label>
								<div class="col-sm-12">
									<input type="email" name="txt_email" class="form-control" placeholder="Ingrese email" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-6 text-left">Contraseña</label>
								<div class="col-sm-12">
									<input type="password" name="txt_password" id="txt_password" class="form-control" placeholder="Ingrese contraseña" required/>
									<input type="checkbox" onclick="verPass()">&nbsp;Mostrar contraseña
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-6 text-left">Seleccionar rol</label>
								<div class="col-sm-12">
									<select class="form-control" name="txt_role" required>
									  <option value="" selected="selected"> - Selecccionar rol - </option>
									  <option value="2">Admin</option>
									  <option value="1">Agente</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="submit" name="btn_login" class="btn btn-primary btn-block" value="Iniciar Sesion" style="background: orange; border-color: orange; border-radius: 10px;">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									¿Olvidaste tu correo o contraseña? <a class="text-info" href="https://wa.link/gis5to">Contacta al administrador del sitio &nbsp;
                                    <span class="icon-whatsapp"></span>.</a>
		
								</div>
							</div>
						</form>
					</div>
				<!--Cierra div login-->
				</div>	
			</div>
		</div>
    </body>
    
    <?php include '../footer.php'; ?>
      <!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <script>
			function verPass() {
				var x = document.getElementById("txt_password");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>
    <?php include '../scripts.php'; ?>
</html>