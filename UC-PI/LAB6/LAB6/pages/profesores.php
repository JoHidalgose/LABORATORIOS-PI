<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión | Universidad Central</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">Lista de Usuarios</h2>
        <table class="table table-striped table-bordered" id="cursos">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usuarios = [
                    ["Pablo Hildago", "1-1948-0000", "phidalgo@gmail.com"],
                    ["Sebastián Joel", "1-1549-1590", "sjoel@gmail.com"],
                    ["Juan Carlos Bodoque", "1-0000-0001", "jcbodoque@soati.com"],
                    ["Carlos Bodeal", "1-1401-0099", "cboal@gmail.com"],
                    ["Samantha Daahji", "-", "sdaji@hotmail.com"],
                    ["Fabricio Contreras", "1-2149-2099", "fcontreras@soati.com"],
                    ["Pedro Calado", "1-1291-0000", "pcalado@soati.com"],
                    ["Alabama Hutson", "1-4901-4012", "alahuston@outlook.com"],
                    ["Susie Noella", "1-4010-9999", "snoe@tauto.com"],
                    ["William Yell", "2-4010-0000", "wyell@soati.com"]
                ];

                foreach ($usuarios as $usuario) {
                    echo "<tr>
                            <td>{$usuario[0]}</td>
                            <td>{$usuario[1]}</td>
                            <td>{$usuario[2]}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
