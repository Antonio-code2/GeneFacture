<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.82.0" />
    <title>GeneFacture</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="framework/css/bootstrap.min.css" rel="stylesheet" />

    <!-- bootstrap iconos -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }



    </style>

    <!-- Custom styles for this template -->
    <link href="framework/css/signin.css" rel="stylesheet" />
  </head>
  <body class="text-center" >
    <main class="form-signin">
      <form>
        <h1 class="h3 mb-3 fw-normal">GeneFacture</h1>

        <div class="form-floating">
          <input
            type="text"
            class="form-control"
            id="floatingInput"
            placeholder="Nomnbre"
          />
          <label for="floatingInput">Usuario</label>
        </div>
        <br />
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Contraseña</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" /> Recuerdame
          </label>
        </div>
        <a class="btn btn-lg container-fluid btn-primary" href="home.php" role="button">Iniciar Sesion</a>
       
        <p class="mt-5 mb-3 text-muted">GeneFacture &copy; 2021</p>
      </form>
    </main>
  </body>
</html>
