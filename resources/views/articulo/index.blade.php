@extends("layouts.plantillabase");

@section("css")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection

@section("contenido")
<a href="articulos/create" class="mb-3 btn btn-primary">CREAR</a>
    <table id="articulos" class="table mt-4 shadow-lg table-striped table-bordered" style="width:100%">
        <thead class="text-white bg-primary">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articulos as $articulo)
            <tr>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                    <form action="{{route('articulos.destroy',$articulo->id)}}" method="POST">
                        @csrf
                        @method("delete")
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @section("js")
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#articulos').DataTable();
        } );
    </script>
    @endsection
@endsection
