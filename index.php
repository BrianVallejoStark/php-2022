<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP FrontEnd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="estiloTP1.css">
    <script type="text/javascript" src="tp_integrador.js"></script>
  </head>

<body>

  <header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark cabeza">
    <div class="container-fluid cabeza">
      <a class="navbar-brand logo" href="index.html">
        <img src="logo universal.png" alt="logo universal" width="60" height="48" class="d-inline-block align-text-top">
       <p class="logo">Un Chicago</p>
      </a>
      
      <div class="izq1" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://wolfentertainment.com/television/current/nightwatch/">Wolf Entertaiment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://es.wikipedia.org/wiki/Chicago_Fire_(serie_de_televisi%C3%B3n)#Personajes">Actores (Wikipedia)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.chicago.gov/city/en.html">La vida real</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ver" href="https://play.universalplus.com/search">Ver series</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  </header>
  <main class="container formu">
 <div class="card-group" id="planes">
      <div class="card" id="ms3">
        <div class="card-body">
          <h5 class="card-title">3 meses</h5>
          <p class="card-text">Descuento por dispositivo</p>
          <br>
          <b>-10% mensual</b>
          <p class="card-text"><small>*:Solo disponible contenido de Un Chicago</small></p>
        </div>
      </div>
      <div class="card" id="ms6">
        <div class="card-body">
          <h5 class="card-title">6 meses</h5>
          <p class="card-text">Descuento por dispositivo</p>
          <br>
          <b>-17% mensual</b>
          <p class="card-text"><small>*:Disponible el contenido de Wolf Entertaiment</small></p>
        </div>
      </div>
      <div class="card" id="ms12">
        <div class="card-body">
          <h5 class="card-title">1 año</h5>
          <p class="card-text">Descuento por dispositivo</p>
          <br>
          <b>-25% mensual</b>
          <p class="card-text"><small>*:Todo el contenido de Universal disponible en tus dispositivos</small></p>
        </div>
      </div>
    </div>     
  </main>
  <div class="container formu">
    <div class="container titulo">
      <p class="chicagoo">
     Adquiere tu subscripción aquí. Elegí el plan que más se adecue a ti.
      </p>
      <p class="chicago">
        <strong>Subscripción básica por dispositivo $550/mes</strong> 
      </p>
    </div>
    <form name="Subscripciones" action="suscripciones.php" method="post">
      <div class="mb-3">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nombres" aria-label="First name" name="nombre">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" name="apellido">
          </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="col">
          <input type="email" class="form-control" placeholder="Correo Electrónico (e-mail)" aria-label="email" name="mail">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="exampleFormControlInput1" class="form-label">Cantidad de dispositivos</label>
          <input type="number" class="form-control" placeholder="Dispositivos" aria-label="Devices" id="devi" min="1" name="disp" >
          <!--onchange="planes()"-->
        </div>
        <div class="col">
          <label for="exampleFormControlInput1" class="form-label">Duración de la subscripción</label>
          <select class="form-select" aria-label="Default select example" id="plan" name="meses">
            <!--onchange="planes()"-->
            <option value="0" selected></option>
            <option value="1 meses">1 mes</option>
            <option value="3 meses">3 meses</option>
            <option value="6 meses">6 meses</option>
            <option value="12 meses">12 meses</option>
          </select>
        </div>
      </div>
    <br>
      <div class="alert alert-success" role="alert">
       Total a pagar: $ <span id="pago"></span>
      </div>
      <div class="row">
        <div class="col">
          <button type="reset" class="btn btn-primary vs cabeza logo form-control" onclick="limpiar()">Limpiar formulario</button>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary vs cabeza logo form-control" onclick="planes()">Resumen de pago</button>
        </div>
      </div>
    </form>
    <br>
  </div>
</div>
<footer class="final">
  <nav class="navbar navbar-expand-lg bg-light navbar-dark final">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://www.instagram.com/universaltvla/?hl=es">Síguenos en Instagram</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Un chicago</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://www.universalplus.com/canales">Otras producciones de Universal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://www.universalplus.com/">Universal +</a>
            </li>
        </ul>
  </nav>
</footer>

</body>
</html>