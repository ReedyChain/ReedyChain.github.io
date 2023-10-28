<!-- Contenido Principal de la Landing Page -->
<link rel="stylesheet" href="css/styles.css">
<main class="container mt-4">
  <div class="d-flex align-items-center min-vh-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img src="assets/img/manzana.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <h2 class="mb-3">Bienvenido a tu sitio</h2>
          <form method="POST" action="accesar.php">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
              <a href="principal.php" for="rememberMe">Cerrar sesion</label>
            </div>
            <a href="encabezado.php" class="btn btn-primary">Ingresar</a>
            <a href="ingresar.php" class="btn btn-primary">Registrarme</a>
          </form>
        </div>
      </div>
    </div>
</div>
</main>