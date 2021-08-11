@extends("layouts.plantillabase");

@section("contenido")
<h2>EDITAR REGISTROS</h2>
    <form action="/articulos/{{$articulo->id}}" method="post">
        @csrf
        @method("put")
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" name="precio" id="precio" class="form-control" tabindex="4" value="{{$articulo->precio}}">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@endsection
