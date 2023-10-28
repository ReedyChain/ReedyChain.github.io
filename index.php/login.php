<main class="container mt-4">
    <div class="d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6">
                    <h2 class="mb-3">Bienvenido al rincon de la nutricion</h2>
                    <form method="POST" action="accesar.php">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                            <label class="form-check-label" for="rememberMe">Recuérdame</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Ingresar</button>
                        <a href="/register/" class="btn btn-primary">Registrarme</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>
