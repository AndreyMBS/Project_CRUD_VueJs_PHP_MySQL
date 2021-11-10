<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css\sweetalert2.min.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>CRUD Vue, PHP y MySQL</title>
</head>

<body>
    <?php require_once('view\includes\nav.php'); ?>

    <div>
        <div class="text-center mt-5 mb-2">
            <h1 class="text center text-light"><span class="text-success">Historia:</span></h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-7 col-lg-7 texto mt-3">
                <p>Creado por Evan You, ex-trabajador de Google, que decidió crear su propio framework en el año 2014.
                Desde entonces, Vue ha subido muchísimo de popularidad, gracias a su sencillez y a todo lo que puede
                ofrecer,que lo vamos a ver a continuación.
                Ofrece todo un conjunto de características y funcionalidades que permiten crear aplicaciones web
                completas.</p>
                <p>Para todo el que haya usado Angular o React muchas de las cosas que ofrece le sonarán,
                debido a que este framework está inspirado en estos dos.
                Como es un framework, va más allá de simplemente ofrecer funciones y utilidades para Javascript. Es una
                nueva forma de programar páginas web. Pero no te preocupes porque con una buena base de Javascript la
                curva de aprendizaje no es muy grande.</p>
            </div>
            <div class="col-12 col-sm-6 col-md-2 col-lg-2 text-center m-3">
                <img src="https://vuejs.org/images/logo.svg" alt="Avatar" height="200" width="200">
            </div>
        </div>
    </div>

    <div class="fondo">
        <div class="text-center">
            <h2 class="text center text-light mb-5 mt-3"><span class="text-success">Algunas de las características de
                    VueJS:</span></h2>
        </div>
        <div class="container text-center mb-5">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4 col-lg mb-3">
                    <div class="card">
                        <img src="img/flexible.jpg" alt="Avatar" height="220px" width="70px" style="width:100%">
                        <div class="container">
                            <h4><b>Versatilidad</b></h4>
                            <p>Es bastante pequeño y se escala a través de plugins.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg mb-3">
                    <div class="card">
                        <img src="img/fast.png" alt="Avatar" height="220px" width="70px" style="width:100%">
                        <div class="container">
                            <h4><b>Rendimiento</b></h4>
                            <p>Su core ocupa 74KB, es bastante liviano.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 col-lg mb-3">
                    <div class="card">
                        <img src="img/accesible.jpg" alt="Avatar" height="220px" width="70px" style="width:100%">
                        <div class="container">
                            <h4><b>Accesibilidad</b></h4>
                            <p>Con bases de Javascript la curva de aprendizaje es baja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg mb-3">
                    <div class="card">
                        <img src="img/fixing.jpg" alt="Avatar" height="220px" width="70px" style="width:100%">
                        <div class="container">
                            <h4><b>Testing</b></h4>
                            <p>Los archivos se encuentran agrupados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg mb-3">
                    <div class="card">
                        <img src="img/mantenimiento.png" alt="Avatar" height="220px" width="70px" style="width:100%">
                        <div class="container">
                            <h4><b>Mantenimiento</b></h4>
                            <p>Fácil posibilidad de mantenimiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('view\includes\footer.php'); ?>
</body>

</html>