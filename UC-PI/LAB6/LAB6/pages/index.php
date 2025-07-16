<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión | Universidad Central</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilosIndex.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="d-flex justify-content-center align-items-start" style="min-height: 100vh; padding-top: 10vh;">
        <div class="col-md-4 bg-light p-4 rounded shadow">
            <h4 class="text-center mb-4">Ingrese sus datos</h4>
            <form action="procesar_login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="correo@uc.ac.cr" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="*****" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
