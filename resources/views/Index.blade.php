
@extends('layouts.PlantillaBase')

@section('Contenido')
    <tbody>
        @foreach ($Productos as $Producto)
            <tr>   
                <td class="text-white" style="text-align: center;" hidden> {{$Producto->id}} </td> 
                <td class="text-white" style="text-align: center;"> {{$Producto->nombre}} </td>
                <td class="text-white" style="text-align: center;"> {{$Producto->descripcion}} </td>
                <td class="text-white" style="text-align: center;"> {{$Producto->categoría}} </td>
                <td class="text-white" style="text-align: center;"> {{$Producto->precio}} </td>
                <td class="text-white" style="text-align: center;"> {{$Producto->created_at}} </td>
                <td><a class="btn btn-outline-info" href="/api/productos/{{$Producto->id}}/edit"><i class="fas fa-edit"></i></a></td>
                <td><a href="/api/productos/{{$Producto->id}}/delete" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
        @endforeach
    </tbody>
@endsection
