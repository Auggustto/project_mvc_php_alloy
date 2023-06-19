<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projec MVC / PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="?router=Site/home/">Projec MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?router=Site/home/">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?router=Site/cadastro/">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?router=Site/consulta/">Search</a>
        </li>
      </ul>
    </div>
  </nav>
  <header class="jumbotron jumbotron-fluid bg-primary text-white text-center">
    <div class="container">
      <h1 class="display-4">Project MVC.</h1>
      <p class="lead">This project was created using PHP and Bootstrap.</p>
    </div>
  </header>
</body>
</html>