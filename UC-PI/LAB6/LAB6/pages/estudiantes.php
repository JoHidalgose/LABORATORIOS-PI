<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Estudiantes | Universidad Central</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Lista de Estudiantes</h2>
        <table class="table table-striped table-bordered" id="cursos">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Carnet</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $estudiantes = [
                    ["Jose Hidalgo", 2018102, "Informática"],
                    ["Sarah Tarah", 2018104, "Administración de Empresas"],
                    ["Karla Cart", 2019400, "Contabilidad Empresarial"],
                    ["Tompo Ash", 2019501, "Finanzas"],
                    ["Tristan Gaos", 2020410, "Arquitectura"],
                    ["Felipe Base", 2011209, "Topografía espacial"],
                    ["Marisela Maldonado", 2089109, "Viaje en el Tiempo [seminario graduación]"],
                    ["Dolibarr Sia", 2019440, "Electromecánica"],
                    ["Ulises Kris", 2014100, "Desarrollo de Videojuegos"],
                    ["George Toph", 2018023, "Mecatrónica"]
                ];

                foreach ($estudiantes as $e) {
                    echo "<tr>
                            <td>{$e[0]}</td>
                            <td>{$e[1]}</td>
                            <td>{$e[2]}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
