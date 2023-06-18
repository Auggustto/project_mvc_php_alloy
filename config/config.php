<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Importando css direto do cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
  <!-- <link rel="stylesheet" href="./materialize/css/materialize.min.css"> -->

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Curso de MVC com PHP</title>
</head>

<body>
  <nav class="blue-grey darken-3">
    <div class="nav-wrapper container">
      <!-- Criando logo com link para pag home -->
      <a href="?router=Site/home/" class="brand-logo light">
        Curso de MVC
      </a>
      <ul class="right">

        <li><a href="?router=Site/cadastro/">Cadastro</a></li>
        <li><a href="?router=Site/consulta/">Consulta</a></li>

      </ul>
    </div>
  </nav>

  <!--Importando o arquivo js direto do cdn-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- <script src="./materialize/js/materialize.min.js"></script> -->
</body>
</html>
