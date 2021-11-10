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
    <title>Registrar</title>
</head>

<body>
    <?php require_once('view\includes\nav.php'); ?>
    <div id="app" class="text-center" width="200">
        <h2 class="text center text-light m-5"><span class="text-success">Registro de usuarios</span></h2>
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <label class="form-label">Nombre:</label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <input type="text" v-model='nombre' class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <label class="form-label">Apellido:</label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <input type="text" v-model='apellido' class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <label class="form-label">Teléfono:</label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <input type="text" v-model='telefono' class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <label class="form-label">Email:</label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <input type="email" v-model='email' class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <label class="form-label">Dirección:</label>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-3">
                        <input type="text" v-model='direccion' class="form-control">
                    </div>
                </div>
                <button class="btn btn-success" value="agregar" @click="addUsuario();">Agregar</button>
            </form>
        </div>
    </div>
    </div>
    <?php require_once('view\includes\footer.php'); ?>
</body>

</html>