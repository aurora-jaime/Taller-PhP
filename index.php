<?php
include("connection.php")
?>


<!doctype html>
<html lang="en">

<head>
  <title>Task List: PHP + MySQL</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  </header>
  <main class="container mt-5">
    <div class="card">
        <div class="card-header">
           Task List
        </div>
        <div class="card-body">

            <form action="" method="post">
              <div class="mb-3">
                <label for="" class="form-label">Tarea</label>
                <input type="text"
                  class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <textarea class="form-control" name="" id="" rows="3"></textarea>
              </div>

                <input name="" id="" class="btn btn-info" type="button" value="Registrar">

            </form>

            <h4 class="card-title mt-4">Lista de pendientes:</h4>

            <ul class="list-group list-group-numbered mt-4">

                   <?php  foreach($result as $registro){ ?>
                <li class="list-group-item ">Actividad 1</li>
                  <?php } ?>
                 <li class="list-group-item ">Actividad 2</li>
                <li class="list-group-item">Actividad 3</li>
                <li class="list-group-item">Actividad 4</li>
            </ul>
            
        </div>
    </div>

  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>