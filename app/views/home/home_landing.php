<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
  <!--Header-->
  <header class="header d-flex flex-column justify-content-between">
  <nav class="navbar navbar-expand-lg navbar-dark w-100">
    <div class="container-fluid fw-bold">
      <a class="navbar-brand" href="#">Bodega Monica</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#experiencia">Experiencia</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contactos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-auto py-4">
    <div class="row">
      <div class="col-12 col-md-6 text-white text-center text-md-start">
        <h1 class="title fw-bold mb-3">Bodega local de víveres</h1>
        <p class="lead mb-4 shadow-text">¡Te invitamos a registrarte hoy mismo para adquirir todo tipo de producto para tu hogar!</p>
        <a href="" class="btn btn-success-custom px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#modal">Únete</a>
      </div>
    </div>
  </div>
</header>
  <!--Experiencia-->
    <div class="py-5" id="experiencia">
  <div class="container">
    <div class="row g-5 py-5 justify-content-center">
      
      <div class="col-12 col-md-6 col-lg-4">
        <div class="project-card">
          <div class="project-img-wrap">
            <img src="<?php echo BASE_URL; ?>/public/image/Variedad.webp" alt="Variedad" class="project-img">
          </div>
          <h5 class="fw-bold mt-3">Variedad de Productos</h5>
          <p class="text-muted">Abastecemos productos frescos y de alta calidad para nuestros clientes.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="project-card">
          <div class="project-img-wrap">
            <img src="<?php echo BASE_URL; ?>/public/image/Atencion.webp" alt="Atencion" class="project-img">
          </div>
          <h5 class="fw-bold mt-3">Atención Personalizada</h5>
          <p class="text-muted">Ofrecemos una amplia selección de alimentos para satisfacer todas sus necesidades.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="project-card">
          <div class="project-img-wrap">
            <img src="<?php echo BASE_URL; ?>/public/image/compromiso.webp" alt="Compromiso" class="project-img">
          </div>
          <h5 class="fw-bold mt-3">Compromiso con el Cliente</h5>
          <p class="text-muted">Nuestro equipo está siempre disponible para ayudar y asesorar a nuestros clientes.</p>
        </div>
      </div>

    </div>
  </div>
</div>
  
  <!--Modal-->
<div id="modal" class="modal fade">
  <div class="modal-dialog modal-lg mt-3">
    
    <div class="modal-content">
      
      <div class="modal-body">

        <div class="text-end">
          <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
          </button>
        </div>

        <div class="card-title text-center pb-3">
          <h3>Iniciar Sesión</h3>
        </div>

        <form action="<?php  echo BASE_URL;  ?>/login" method="POST">

          <label for="user" class="form-label">Usuario:</label>

          <input id="user"
                 type="text"
                 name="user"
                 class="form-control mb-3"
                 required>

          <label for="pass" class="form-label">Contraseña:</label>

          <input id="pass"
                 type="password"
                 name="pass"
                 class="form-control mb-3"
                 required>

          <button type="submit"
                  class="btn btn-primary w-100">
            Enviar
          </button>

        </form>

      </div>
    </div>
  </div>
</div>
      </div>
    </div>  
<!--Footer-->
<footer class="footer-custom py-4 mt-5 text-white">
  <div class="container">
    <div class="row align-items-center g-4">
      
      <div class="col-12 col-md-6 text-center text-md-start">
        <h4 class="fw-bold mb-1 text-highlight">Bodega Mónica</h4>
        <p class="footer-copyright small mb-0">&copy; <?php echo date('Y'); ?> Todos los derechos reservados.</p>
      </div>

      <div class="col-12 col-md-6 text-center text-md-end">
        <h5 class="fw-bold text-uppercase mb-3 tracking-wider">Contactos</h5>
        <ul class="list-unstyled mb-0 footer-contact-list">
          <li class="mb-2">
            <i class="fa-solid fa-map-marker-alt me-2 footer-icon"></i>Jr. Ucayali N° 123, Pucallpa
          </li>
          <li class="mb-2">
            <i class="fa-solid fa-phone-alt me-2 footer-icon"></i>+51 987 654 321
          </li>
          <li>
            <i class="fa-solid fa-envelope me-2 footer-icon"></i>contacto@bodegamonica.com
          </li>
        </ul>
      </div>

    </div>
  </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>