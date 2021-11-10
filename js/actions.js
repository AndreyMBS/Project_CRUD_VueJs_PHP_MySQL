var app = new Vue({
    el: '#app',
    data: {
        usuarios: [],
        nombre: '',
        apellido: '',
        telefono: '',
        email: '',
        direccion: ''
    },
    methods: {
        obtenerUsuarios: function () {
            axios.post('crud.php', {
                request: 1
            })
                .then(function (response) {
                    app.usuarios = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        addUsuario: function () {
            if (this.nombre != '' && this.apellido != '' && this.telefono != '' && this.email != '' && this.direccion != '') {
                axios.post('crud.php', {
                    request: 2,
                    nombre: this.nombre,
                    apellido: this.apellido,
                    telefono: this.telefono,
                    email: this.email,
                    direccion: this.direccion
                })
                    .then(function (response) {
                        app.obtenerUsuarios();
                        app.nombre = '';
                        app.apellido = '';
                        app.telefono = '';
                        app.email = '';
                        app.direccion = '';
                    })
                    .catch(function () {
                        console.log(error);
                    });
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Usuario guardado',
                    showConfirmButton: false,
                })
                console.log(idUsuario, nombre, telefono, apellido, email, direccion);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Debes llenar los espacios!',
                })
            }
        },

        editUsuario: function (idUsuario, nombre, apellido, telefono, email, direccion) {

            Swal.fire({
                title: 'Editar',
                html:
                    `<div id="app" class="form-group"><div class="row"><label class="col-sm-3 col-form-label">Nombre</label><div class="col-sm-7"><input type="text" v-model='nombre' value="` + nombre + `" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">Apellido</label><div class="col-sm-7"><input type="text" v-model='apellido' value="` + apellido + `" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Teléfono</label><div class="col-sm-7"><input type="text" v-model='telefono' value="` + telefono + `" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">Email</label><div class="col-sm-7"><input type="text" v-model='email' value="` + email + `" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Dirección</label><div class="col-sm-7"><input type="text" v-model='direccion' value="` + direccion + `" class="form-control"></div></div>`
            }).then((result) => {
                if (result.value)
                    if (this.nombre != '' && this.apellido != '' && this.telefono != '' && this.email != '' && this.direccion != '') {
                        nombreE = this.nombre;
                        apellidoE = this.apellido;
                        telefonoE = this.telefono;
                        emailE = this.email;
                        direccionE = this.direccion;
                        axios.put('crud.php', {
                            request: 3,
                            idUsuario: this.idUsuario,
                            nombre: this.nombre,
                            apellido: this.apellido,
                            telefono: this.telefono,
                            email: this.email,
                            direccion: this.direccion
                        }).then(function (response) {
                            app.obtenerUsuarios();
                            app.nombre = '';
                            app.apellido = '';
                            app.telefono = '';
                            app.email = '';
                            app.direccion = '';
                        })
                            .catch(function (error) {
                                console.log(error);
                            });
                        console.log(idUsuario, nombre, telefono);
                    }
            })
        },

        deleteUsuario: function (index, idUsuario) {
            axios.post('crud.php', {
                request: 4,
                idUsuario: idUsuario
            })
                .then(function (response) {
                    app.usuarios.splice(index, 1);
                })
                .catch(function (error) {
                    console.log(error);
                });
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Usuario eliminado',
                showConfirmButton: false,
                timer: 1500
            })
        },

        btnNuevoRegistro: function () {
            window.location.href = "registrarUsuarios.php";
        }
    },

    created: function () {
        this.obtenerUsuarios();
    }
})