<?php  ?>
<style>
    body {
        background-color: #f8f9fa;
        
    }
    main {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .form-container {
        background-color: white;
        padding: 30px;
        margin-top: 30px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
</style>
<main class="container mt-3">
        <div class="form-container col-12 col-md-6">
            <h2 class="mb-4 text-center">Crear una cuenta</h2>
            <form action="save-registro.php" method="POST" id="registroForm">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombres:</label>
                    <input type="text" name="nombres" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellidos:</label>
                    <input type="text" name="apellidos" class="form-control" required>
                </div>

                

                <div class="mb-3">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                    <input type="date" name="fechaNacimiento" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label for="genero" class="form-label">Fecha de Nacimiento:</label>
                    <select name="genero" class="form-control">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>

                

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="tel" name="telefono" class="form-control" required pattern="[0-9]{10}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <a href="/login/login.php" class="btn btn-primary w-100">Registrarme</a>

            </form>
        </div>
    </main>
    
