<?php 
$pg = "sobre-mi";
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
    <title>Sobre mi</title>
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>

    <main>

        <section class="container" id="descripcion">
            <div class="row">
                <div class="col-sm-5 col-12 mt-3">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>

                    <p class="pb-sm-5">Soy un estudiante de sistemas apasionado por la programación y por el mundo TI.
                        Me
                        encuentro
                        formandome profesionalmente.
                    </p>

                    <a href="contacto.php" class="btn btn-rojo">Envíar mensaje</a>
                </div>

                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="images/agustin.jpg" alt="Agustín Vallejos" class="img-fluid agustin">
                </div>
            </div>
        </section>

        <section id="stack-tecnologico">
            <div class="container mt-4">
                <div class="row pt-5 pb-4">
                    <h2>Stack tecnológico</h2>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-2  text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">Javascript</h3>
                            <img src="https://img.stackshare.io/service/1209/javascript.jpeg" alt="js"
                                class="d-block img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">PHP</h3>
                            <img src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg" alt="php"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">HTML5</h3>
                            <img src="https://img.stackshare.io/service/2538/kEpgHiC9.png" alt="html5"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">React.js</h3>
                            <img src="https://img.stackshare.io/service/1020/OYIaJ1KK.png" alt="react"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">jQuery</h3>
                            <img src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg" alt="jquery"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">Bootstrap</h3>
                            <img src="https://img.stackshare.io/service/1101/C9QJ7V3X.png" alt="bootstrap"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>
                </div>

                <div class="row pb-4">

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">Laravel</h3>
                            <img src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png"
                                alt="laravel" class="img-fluid mx-auto pb-5" width="85">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">MySQL</h3>
                            <img src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png" alt="laravel"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">CSS</h3>
                            <img src="https://img.stackshare.io/service/6727/css.png" alt="css"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">Git</h3>
                            <img src="https://img.stackshare.io/service/1046/git.png" alt="git"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">Apache</h3>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1200px-Apache_Software_Foundation_Logo_%282016%29.svg.png"
                                alt="apache" class="img-fluid mx-auto pb-5" width="120">
                        </div>
                    </div>

                    <div class="col-6 col-sm-2 text-center">
                        <div class="lenguajes my-3">
                            <h3 class="pt-5">Mercadopago</h3>
                            <img src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg" alt="mercadopago"
                                class="img-fluid mx-auto pb-5" width="60">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container" id="experiencia">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2 class="maletin">
                        <i class="fas fa-briefcase"></i> Experiencia laboral
                    </h2>
                </div>
            </div>

            <div class="row shadow rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 my-auto d-none d-sm-block">
                            <img src="images/coinscenter.png" alt="coinscenter" class="img-fluid baw">
                        </div>

                        <div class="col-12 col-sm-10 p-3">
                            <h3>Administrador / Co-Founder</h3>
                            <h4>Coinscenter</h4>
                            <h5>2020 - Actualidad</h5>
                            <p>Soy el encargado de administrar todas las solicitudes del negocio y de llevar a cabo las
                                ventas solicitadas. También estoy a cargo de la facturación y de los proveedores de mis
                                servicios. Mantengo contacto constante con personas de todo el mundo y resuelvo los
                                problemas que hay con los pagos en divisas extranjeras.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2 d-none d-sm-block">
                            <img src="https://images.vexels.com/media/users/3/206027/isolated/preview/722ece3a0f85dfd33a30d5d5c10bc60c-libro-abierto-en-ingles.png"
                                alt="ingles" class="img-fluid baw">
                        </div>

                        <div class="col-12 col-sm-10 p-3">
                            <h3>Profesor de inglés</h3>
                            <h4>Particular</h4>
                            <h5>2016 - 2017</h5>
                            <p>En el año 2016 me desempeñé como profesor de inglés particular para niveles primario y
                                secundario. Transmití mi conocimiento sobre el lenguaje ayudando a estudiantes de 10 a
                                16 años a preparar sus exámenes escolares.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container" id="formacion">
            <div class="row pt-5 pb-4">
                <div class="col-12">
                    <h2>
                        <i class="fas fa-graduation-cap"></i> Formación académica
                    </h2>
                </div>
            </div>

            <div class="row shadow rounded">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTneYNYHxz8rjJirvNMoUPxh5qfErzbgX5-jSF-kjmM0f0-PFPrTkqeTPxSMmS-JpjpcpM&usqp=CAU"
                                class="img-fluid baw" alt="uba">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Licenciado en sistemas</h3>
                            <h4>Facultad de ciencias económicas</h4>
                            <h5>2019 - Actualidad</h5>
                            <a href="https://www.economicas.uba.ar/alumnos/sistemas/">https://www.economicas.uba.ar/</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" alt="mater" class="img-fluid baw">
                        </div>

                        <div class="col-12 col-sm-10 p-3">
                            <h3>Bachiller</h3>
                            <h4>Instituto Mater dolorosa</h4>
                            <h5>2014 - 2018</h5>
                            <a href="https://mater-dolorosa.webnode.page/">https://mater-dolorosa.webnode.page/</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container mb-5" id="cursos">
            <div class="row pt-5 pb-4">
                <div class="col-12">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>

            <div class="row shadow">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="https://nelsontarche.com.ar/images/logo-depcsuite.svg" alt="depc"
                                class="img-fluid baw">
                        </div>

                        <div class="col-12 col-sm-10 p-3">
                            <h3>Curso de programación Full Stack</h3>
                            <h4>DePC Suite</h4>
                            <h5>Expedición: oct 2022</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="https://www.culturaldevoto.com.ar/wp-content/uploads/2022/01/logo-academia-cultural-inglesa-devoto.png"
                                alt="ingles" class="img-fluid baw">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>English Intermediate B2</h3>
                            <h4>Academia Cultural Inglesa Devoto</h4>
                            <h5>Expedición: Dic: 2019</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-5-2.png" alt="yt"
                                class="img-fluid baw">
                        </div>

                        <div class="col-12 col-sm-10 p-3">
                            <h3>Curso gratuito de programación WEB</h3>
                            <h4>SoyDalto, YouTube</h4>
                            <h5>Expedición: Oct: 2021</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="hobbies" class="mb-3">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white shadow card-idiomas me-sm-1">
                            <div class="col-4 text-center card py-5">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul class="p-0">
                                    <li>Español - Nativo</li>
                                    <li>Ingles - Intermediate B2</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row ml-sm-1 bg-white shadow ms-sm-1 card-idiomas">
                            <div class="col-4 text-center card py-5">
                                <i class="fas fa-star"></i>
                            </div>
                            
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul class="p-0">
                                    <li>Tocar la guitarra</li>
                                    <li>Escuchar música</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>




    <footer class="container mt-auto pb-2">
        <div class="btn-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541173654688" target="_blank" title="Contactame por Whatsapp">
                <i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-6 col-sm-3">
                <a href="" target="_blank" title="Github"> <i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/agustin-vallejos/" target="_blank" title="Linkedin"> <i
                        class="fab fa-linkedin-in"></i></a>
            </div>

            <div class="col-6 col-sm-3 sponsor">
                Sponsor <a href="">DePC suite</a>
            </div>

            <div class="col-11 offset-1 col-sm-3">
                <a href="mailto:agustinvallejos010@gmail.com">agustinvallejos010@gmail.com</a>
            </div>
        </div>


    </footer>

</body>

</html>