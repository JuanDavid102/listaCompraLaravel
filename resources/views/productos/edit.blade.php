@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                Modificar producto {{ $id }}
              </div>

              <div class="card-body" style="padding:30px">

                <form action="{{ url('/productos/create') }}" method="POST">
                    {{method_field('PUT')}}

                    @csrf

                 <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" value="{{$producto[0]}}" name="nombre" id="nombre" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="title">Precio</label>
                   <input type="number" name="precio" id="precio">
                </div>

                <div class="form-group">
                    <label for="title">Categoría</label>
                   <input type="text" value="{{$producto[1]}}" name="categoria" id="categoria" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Imagen</label>
                   <input type="text" name="imagen" id="imagen" class="form-control">
                </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar producto
                    </button>
                 </div>

                 {{-- TODO: Cerrar formulario --}}

              </div>
           </div>
        </div>
     </div>

@stop
