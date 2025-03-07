
@extends('layouts.PlantillaBase')

@section('Contenido')

    <tbody>
        <div class="col-md-12 table-responsive">
            <div class="card-body bg-light">
                <div class="card-header bg-light text-center text-uppercase"><b>Actualizar Producto</b></div>
                <form action="/api/productos/{{$Producto->id}}/update" method="POST" class="col-md-12 mb-12" style="margin-top: 2%;" id="FormActualizar">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <img src="" alt="Red dot" id="ViewFoto" width="420" height="268" class="brand-image" style="margin-top: 2%; margin-left: 11%;"/>
                        </div>
                        <div class="col-md-4" style="margin-top: 5%;">
                            <label class="float-end"><b>{{$Producto->nombre}}</b></label>
                        </div>

                        <div class="col-md-5" style="margin-top: 11%; margin-left: -28%;">
                            <label class="form-label" for="LoadImg2">Cambiar Foto: </label>
                            <input type="file" class="form-control" id="LoadImg2"/>
                            <input type="text" class="form-control" id="imagen" value="{{$Producto->imagen}}" hidden/>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="nombre">Nombre Producto: </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$Producto->nombre}}"/>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="Precio">Precio: </label>
                                <input type="number" class="form-control" id="precio" name="precio" value="{{$Producto->precio}}"/>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">Categoria: </label>
                                <div class="form-group">
                                    <select class="form-select" id="SelectCategoria" name="SelectCategoria">
                                        <option selected value="{{$Producto->categoría}}">{{$Producto->categoría}}</option>
                                        <option value="Electrodomésticos">Electrodomésticos</option>
                                        <option value="Moda">Moda</option>
                                        <option value="Vehículos">Vehículos</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 2%;">
                            <div class="form-group">
                                <label class="form-label" for="descripcion">Descripción: </label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" rows="3" value="{{$Producto->descripcion}}" style="height: 92px;"/ >
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info text-white">💱 Actualizar </button>
                        <a href="/api/productos" class="btn btn-secondary" >❌ Cancelar </a>
                    </div>

                </form>
            </div>
        </div>
    </tbody>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        document.getElementById('TitulosTabla').style.display = 'none';

        //Img Soporte 
        document.addEventListener('DOMContentLoaded', function() {
            Foto= document.getElementById("imagen").value;
            $("#ViewFoto").empty();
            if((Foto == null) || (Foto == "")){
                $("#ViewFoto").prop("src", "../img/Sorry_404.png");
            }else{
                $("#ViewFoto").prop("src", Foto);
            }
        })
        
    </script>

@endsection
