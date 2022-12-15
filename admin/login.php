<?php
    session_start();
    include '../db/db.php';
    if(isset($_SESSION['admin'])){
        header('Location: ../index');
    }
    if(isset($_SESSION['user'])){
        header('Location: ../index');
    }

    if(isset($_REQUEST['btn_login']))
    {
        $email      = $_REQUEST['email'];
        $password   = $_REQUEST['password'];
        $password   = hash('sha512', $password);
        $role       = $_REQUEST['role'];

        if(empty($email))
        {
            $errorMsg[]="Por favor ingrese su correo electrónico";
        }
        else if(empty($password))
        {
            $errorMsg[]="Por favor ingrese su contraseña";
        }
        else if(empty($role))
        {
            $errorMsg[]="Por favor seleccione su rol";
        }
        else
        {
            try
            {
                $select_stmt=$db->prepare("SELECT * FROM users WHERE email=:uemail AND pwd=:upassword AND role=:urole");
                $select_stmt->bindParam(":uemail", $email);
                $select_stmt->bindParam(":upassword", $password);
                $select_stmt->bindParam(":urole", $role);
                $select_stmt->execute();
                while($row = $select_stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $dbemail    = $row['email'];
                    $dbpassword = $row['pwd'];
                    $dbrole     = $row['role'];
                }
                if($email != null && $password != null && $role !=null)
                {
                    if($select_stmt->rowCount() > 0)
                    {
                        if($email == $dbemail && $password == $dbpassword && $role == $dbrole)
                        {
                            switch($dbrole)
                            {
                                case '2':
                                    $_SESSION['admin'] = $email;
                                    $loginMsg = "Administrador logueado con éxito, redirigiendo...";
                                    header('refresh: 3; ../index');
                                    break;
                                case '1':
                                    $_SESSION['agente'] = $email;
                                    $loginMsg = "Agente logueado con éxito, redirigiendo...";
                                    header('refresh: 3; ../index');
                                    break;
                                default:
                                    $errorMsg[] = "Error al iniciar sesión";
                            }
                        }
                        else
                        {
                            $errorMsg[] = "Error al iniciar sesión";
                        }
                    }
                }
                else
                {
                    $errorMsg[] = "Error al iniciar sesión";
                }
            }
            catch(PDOException $e)
            {
                $e->getMessage();
            }
        }
    }
    else
    {
        $errorMsg[] = "Error al iniciar sesión";
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
            
        </style>
    </head>
    <body>
        <?php include '../nav.php'; ?>
    </body>
    <?php include '../footer.php'; ?>
      <!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <?php include '../scripts.php'; ?>
</html>