<?php
$pg = "inicio"
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 mx-auto text-center div-cohete">
               <a href="proyectos.html"><img src="images/cohete.svg" class="mb-2 cohete" alt=""></a>
            </div>

            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <p class="mt-5 py-1">Bienvenid@ a mi sitio web sobre mi camino en IT</p>
            </div>

            <div class="col-12 text-center pt-2 mb-5">
                <a href="proyectos.php" class="btn btn-know  shadow">Conoce mis proyectos</a>
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