<?php
    include("../php/validarSesion.php");
    include("../php/validarAdmin.php");
    // sleep(10);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pages/estilos.css">
    <title>Modificar Usuarios</title>
</head>
<body>
    <?php include("../components/header.php");?>
    <div class='updateUser'>
        <h2>Actualizar Contraseñas</h2>
        <section>
            <div class="updateUserDiv" data-id="1">
                <div>
                    <h3>Contraseñas de Validación</h3>
                    <span class="desplegue">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                    </span>
                </div>
                <form data-type="con">
                    <label>Actualizar Contraseña de Acceso:</label>
                    <input placeholder="Escriba su Contraseña" value="">
                    <button type="submit">Actualizar</button>
                </form>
                <span>
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                </span>
            </div>
        </section>
        <main></main>
    </div>
    <!-- edbce914409ab6a733e2e527fbe4349b -->
    <script src='../pages/modificarUsers.js'></script>
</body>
</html>