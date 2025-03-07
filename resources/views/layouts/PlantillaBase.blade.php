
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> :: Productos :: </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body class="bg-dark">
    <section class="pricing py-2">
        <div class="container">
            <div style="margin-top: 2%;"></div>
                <button type="button" class="btn btn-outline-info float-left" data-bs-toggle="modal" data-bs-target="#ModalNuevoProducto"> Registrar Producto <i class="fa-solid fa-user-plus"></i></button>
                <button type="button" id="BtnPDF" class="btn bg-black float-end text-info">PDF 🖨 </button>
                
                <!--Fecha y Hora-->
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-dark">  
                    <section class="pricing py-7">
                        <MARQUEE ScrollAmount="11">
                            <h2 href="/" style="color: #2892DB;">📅
                            <?php
                                date_default_timezone_set("America/Bogota");
                                //echo date ("l d F Y -⏰ h:i a");
                                echo date ("l d F Y ");
                            ?>
                            </h2>
                        </MARQUEE>
                    </section>
                </div>
                
                <div class="col-md-12 table-responsive">
                    <table id="TblProductos" class="table table-bordered table-striped text-center mt-3 dataTable">
                        <thead class="bg-info" id="TitulosTabla">
                            <tr>   
                                <th>NOMBRE</th>
                                <th>DESCRIPCION PRODUCTO</th>
                                <th>CATEGORIA</th>
                                <th>PRECIO</th>
                                <th>FECHA DE REGISTRO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <div class="container">
                            @yield('Contenido')
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </section>

            
    <!--Modal Registro Producto-->
    <div class="modal fade" id="ModalNuevoProducto" tabindex="-1" role="dialog" aria-labelledby="ModalNuevoProductoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card-body bg-light">
                        <button type="button" class="btn close float-end" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        <div class="card-header bg-light text-center text-uppercase"><b>Registrar Nuevo Producto</b></div>
                        <form action="productos/crear" method="POST" class="col-md-12 mb-12" style="margin-top: 5%;" id="FormProductos" name="formulario1">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <label class="form-label" for="nombre">Nombre Producto: </label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre Producto"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="InputDescripcion">Descripción: </label>
                                    <textarea class="form-control" id="InputDescripcion" rows="3" placeholder="Agregue una descripción del producto..."></textarea>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 2%;">
                                <div class="col-md-3">
                                    <label class="form-label" for="Precio">Precio: </label>
                                    <input type="number" class="form-control" id="precio" placeholder="Introduzca Valor"/>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Categoria: </label>
                                    <div class="form-group">
                                        <select class="form-select" id="SelectCategoria" name="SelectCategoria">
                                            <option disabled selected>Elige Una Opcion</option>
                                            <option value="Electrodomésticos">Electrodomésticos</option>
                                            <option value="Moda">Moda</option>
                                            <option value="Vehículos">Vehículos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label" for="LoadImg">Imagen: </label>
                                    <input type="file" class="form-control" id="LoadImg"/>
                                    <input type="text" class="form-control" id="imagen" hidden/>
                                </div>
                            </div>
  
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" id="BtnGuardarProducto" class="btn btn-info text-white" onclick="GuardarProducto()">💾 Guardar </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">❌ Cancelar </button>
                </div>
           </div>
        </div>
    </div>
    

    <!-- Copyright -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 28%;">  
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <div class="text-white mb-3 mb-md-0" style="margin-left: 28%;">
                👨🏽‍💻 MingaSoft™  Copyright © 2025. by Diego Camilo Rendón All rights reserved.
            </div>
            <div>
                <a href="https://github.com/MINGA-92/" class="text-white" >
                    <i class="fa-brands fa-github"></i>
                </a>
                <span class="container text-white">       </span>
                <a href="https://www.linkedin.com/in/diego-camilo-rend%C3%B3n-l%C3%B3pez-6596661a2/" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        //Soporte PDF
        $("#BtnPDF").click(function(){
            print();
        });

        //Img Soporte 
        $("#LoadImg").change(function(event) { 
            var fileInput = document.getElementById("LoadImg");
            var reader = new FileReader(); 
            reader.readAsDataURL(fileInput.files[0]);
            reader.onload = function() {
                var Imagen= reader.result;
                $("#imagen").text(Imagen);
                $("#imagen").val(Imagen);
            }
        });

        //Guardar Producto
        function GuardarProducto() {
            let Nombre = document.getElementById('nombre').value;
            let Descripcion = document.getElementById('InputDescripcion').value;
            let Precio = document.getElementById('precio').value;
            let Categoria = document.getElementById('SelectCategoria').value;
            let Imagen = document.getElementById('imagen').value;


            var form = document.createElement('form');
			form.style.visibility = 'hidden';
			form.method = 'POST';
			form.action = 'productos/crear';

			var inputNombre = document.createElement('input');
			inputNombre.name = 'nombre';
			inputNombre.value = Nombre;
			form.appendChild(inputNombre);

            var inputDescripcion = document.createElement('input');
			inputDescripcion.name = 'descripcion';
			inputDescripcion.value = Descripcion;
			form.appendChild(inputDescripcion);

            var inputPrecio = document.createElement('input');
			inputPrecio.name = 'precio';
			inputPrecio.value = Precio;
			form.appendChild(inputPrecio);

            var inputCategoria = document.createElement('input');
			inputCategoria.name = 'categoría';
			inputCategoria.value = Categoria;
			form.appendChild(inputCategoria);

            var inputImagen = document.createElement('input');
			inputImagen.name = 'imagen';
			inputImagen.value = Imagen;
			form.appendChild(inputImagen);


			document.body.appendChild(form);
			form.submit();

        }

    </script>

</body>
</html>

