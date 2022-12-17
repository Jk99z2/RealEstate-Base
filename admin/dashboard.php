<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <?php include '../links.php'; ?>
</head>
<body>
    <?php include '../nav.php'; 
    ?>

    <section class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="font-weight-bold text-center py-1">Dashboard</h2>
                    </div>
                    <div class="card-body"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img-top pt-4">
                                    <a href="adm_properties">    
                                        <center><img src="../images/icons/home.png" class="card-img-top" alt="" style="width: 5rem; height: 5rem;"></center><br>
                                    </a>
                                </div>
                                <div class="card-header">
                                    <a href="adm_properties">
                                        <h3 class="text-center">Gestionar propiedades</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                            <div class="card-img-top pt-4">
                                    <a href="adm_users">
                                        <center><img src="../images/icons/user.png" class="card-img-top" alt="" style="width: 5rem; height: 5rem;"></center><br>
                                    </a>
                                </div>
                                <div class="card-header">
                                    <a href="adm_users">
                                        <h3 class="text-center">Gestionar agentes</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                            <div class="card-img-top pt-4">
                                <a href="settings">
                                    <center><img src="../images/icons/enterprise.png" class="card-img-top" alt="" style="width: 5rem; height: 5rem;"></center><br>
                                </a>
                                </div>
                                <div class="card-header">
                                    <a href="settings">
                                        <h3 class="text-center">Ajustes</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

    </section>
</body>
    <?php include '../footer.php'; ?>
	
    <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
      <?php include '../scripts.php'; ?>
</html>