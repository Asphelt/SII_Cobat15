<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobat 15</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="build/css/app.css">
</head>
<body class="fondo_alumno">
    <header class="header_alumno">
        <div class="head_alumno">
            <nav class="navegacion-principal">
                <a class='exit-btn' href="login.php">Salir</a>
            </div>
        </div>
    </header>
    <aside>
        <p> Menu </p>
        <a href="#">
          <i class="fa fa-user-o" aria-hidden="true"></i>
          Inscripción
        </a>
        <a href="#">
          <i class="fa fa-laptop" aria-hidden="true"></i>
          Servicios
        </a>
      </aside>
      </div> 
      <div class= "files">
          <div class="container p-y-1">
      <div class="row m-b-1">
        <div class="col-sm-6 offset-sm-3">
          <button type="button" class="btn btn-primary btn-block" onclick="document.getElementById('inputFile').click()">Add Image</button>
          <div class="form-group inputDnD">
            <label class="sr-only" for="inputFile">File Upload</label>
            <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file">
          </div>
        </div>
      </div>
      <div class="row m-b-1">
        <div class="col-sm-6 offset-sm-3">
          <button type="button" class="btn btn-success btn-block" onclick="document.getElementById('inputFile').click()">Add Image</button>
          <div class="form-group inputDnD">
            <label class="sr-only" for="inputFile">File Upload</label>
            <input type="file" class="form-control-file text-success font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file">
          </div>
        </div>
      </div>
        <div class="row m-b-1">
        <div class="col-sm-6 offset-sm-3">
          <button type="button" class="btn btn-warning btn-block" onclick="document.getElementById('inputFile').click()">Add Image</button>
          <div class="form-group inputDnD">
            <label class="sr-only" for="inputFile">File Upload</label>
            <input type="file" class="form-control-file text-warning font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file">
          </div>
        </div>
      </div>
        <div class="row m-b-1">
        <div class="col-sm-6 offset-sm-3">
          <button type="button" class="btn btn-danger btn-block" onclick="document.getElementById('inputFile').click()">Add Image</button>
          <div class="form-group inputDnD">
            <label class="sr-only" for="inputFile">File Upload</label>
            <input type="file" class="form-control-file text-danger font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file">
          </div>
        </div>
      </div>
    </div>
    </div>
</body>
</html>