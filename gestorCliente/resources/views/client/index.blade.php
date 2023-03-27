@extends('layout.app')
@section('content')

    <h3 class="text-center mt-4 mb-3">Listado De Clientes</h3>

    <div class="container">
        <a href="{{ route('create') }}" class="btn btn-light mb-3"><img src="{{ asset('img/crear.png') }}" alt="crear_cliente" width="35px"> Crear Cliente</a>
        <table class="table table-hover text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>EMAIL</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
                <th>ACCIONES</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente['id'] }}</td>
                    <td>{{ $cliente['nombres']}}</td>
                    <td>{{ $cliente['apellidos']}}</td>
                    <td>{{ $cliente['email']}}</td>
                    <td>{{ $cliente['direccion']}}</td>
                    <td>{{ $cliente['telefono']}}</td>
                    <td>
                        <a href="{{ route('edit', $cliente['id']) }}" class="btn bg-light"><img src="{{ asset('img/editar.png') }}" width="30px" alt="editar"></a>
                        <a href="{{ route('show', $cliente['id']) }}" class="btn bg-light"><img src="{{ asset('img/detalles.png') }}" width="30px" alt="editar"></a>
                        <form action="{{ route('destroy', $cliente['id']) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" value="Eliminar" class="btn btn-light " onclick="return confirm('¿Desea eliminar?')"><img src="{{ asset('img/borrar.png') }}" width="30px" alt="editar"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
