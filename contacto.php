<?php 
$pg = "contacto";
?>


<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me conectes enviándome un mensaje por Whatsapp</p>
            </div>

            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow" required style="Height:ol-sm-3"></textarea>
                    </div>
                    <div class="">
                        <button type="sumbit" name="btnEnviar" id="btnEnviar" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541173654688" target="_blank"
                title="Contactame por Whatsapp"> <i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-6 col-sm-3">
                <a href="" target="_blank" title="Github"> <i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/agustin-vallejos/" target="_blank" title="Linkedin"> <i class="fab fa-linkedin-in"></i></a>
            </div>

            <div class="col-6 col-sm-3">
                Sponsor <a href="">DePC suite</a>
            </div>

            <div class="col-11 offset-1 col-sm-3">
                <a href="mailto:agustinvallejos010@gmail.com">agustinvallejos010@gmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>