<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css\sweetalert2.min.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title></title>
</head>
<body>
    <?php require_once('view\includes\nav.php'); ?>

    <div id="app" align="center" width="200">
        <h2 class="text center text-light"><span class="text-success">Consulta de usuarios</span></h2>
        <div class="container">
            <div class="row mt-5">
                <div  class="col-lg-12 izquierda">
                    <button @click="btnNuevoRegistro()" class="btn btn-success" title="Nuevo Registro"><i class="fas fa-user-plus"></i></button>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <th>ID Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th> Acciones </th>
                        </thead>
                        <tbody>
                            <tr v-for="(usuario, index) in usuarios">
                                <td> {{ usuario.idUsuario }} </td>
                                <td> {{ usuario.nombre }} </td>
                                <td> {{ usuario.apellido }} </td>
                                <td> {{ usuario.telefono }} </td>
                                <td> {{ usuario.email }} </td>
                                <td> {{ usuario.direccion }} </td>
                                
                                <td>
                                    <button class="btn btn-success" value="editar" @click="editUsuario(usuario.idUsuario, usuario.nombre, usuario.apellido, usuario.telefono, usuario.email, usuario.direccion )">
                                    <i class="fas fa-pencil-alt"></i>
                                    </button> 
                                    <button class="btn btn-danger" value="eliminar" @click="deleteUsuario(index, usuario.idUsuario)">
                                    <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
            </div>
        </div>
    </div>
    <?php require_once('view\includes\footer.php'); ?>
    </body>
</html>