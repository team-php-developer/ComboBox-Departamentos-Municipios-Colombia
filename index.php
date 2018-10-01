<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Menú Select Dinamico en PHP</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
  <div class="container">
    <div class="page-header text-center">
      <h1>Combobox (select) dinámicos</h1>
      <h3><small>En PHP, MySQL y JQuery (Ajax)</small></h3>
    </div>
    <div class="alert alert-success text-center" role="alert">Ejemplo básico de Select Dinamico</div>
    <p>Elige un Departamento de la Lista:</p>
    
    <div class="row">
      <div class="col-md-4">
        <p>Seleccione Departamento
          <select id="lista_departamento" name="lista_departamento" class="form-control"></select>
        </p>
      </div>

      <div class="col-md-4">
        <p>Seleccione Municipio
          <select id="municipios" name="municipios" class="form-control"></select>
        </p>
      </div>

      <div class="col-md-4">
        <p><br><button id="enviar" type="submit" class="btn btn-default btn-block">Enviar</button></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p><b>El Resultado es: </b></p><p id="resultado1"></p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- === El siguiente script se ejecuta consumiendo servicios directamente de internet === -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script type="text/javascript" src="js/index.js"></script>
</body>
</html>