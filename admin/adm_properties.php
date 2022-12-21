<?php
session_start();

if(!isset($_SESSION['admin'])){
    header('location: ../');
}

include '../db/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <?php include '../links.php'; ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>
<body>
    <?php include '../nav.php'; ?>
    <section class="container">
            <h2 style = "color:#0d6efd;"></h2>
            <h3>Gestionar propiedades</h3>
            <div class="row">
                <div class="col">
                    <div class="p-3 pb-5 bg-light" style="border-radius: 30px;">
                        <h4 class="ml-3">Lista de agentes inmobiliarios</h4>
                        <p class="ml-3 mt-3" style="color: black; margin-bottom: -15px;">Equipo conformado por nuestros agentes más calificados.</p><br>
                        <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                        </button>
                        <br>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
    </section>
    
    <section class="container">
        <table id="theTable" class="display" style="width: 100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                </tr>
            </tfoot>
        </table>
    </section>
</body>
    <?php include '../footer.php'; ?>

    <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
      <?php include '../scripts.php'; ?>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="application/javascript">
    $(document).ready( function () {
        $('#theTable').DataTable({
            ajax: 'get_data.php',
        });
    } );
</script>