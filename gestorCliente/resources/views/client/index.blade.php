@extends('layout.app')
@section('content')

    <h3 class="text-center mt-4 mb-3">Listado De Clientes</h3>

    <div class="container">
        <a href="{{ route('create') }}" class="btn btn-primary mb-3">Crear Cliente</a>
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
                @foreach ($clientes['data'] as $key => $cliente)
                <tr>
                    <td>{{ $cliente['id'] }}</td>
                    <td>{{ $cliente['nombres']}}</td>
                    <td>{{ $cliente['apellidos']}}</td>
                    <td>{{ $cliente['email']}}</td>
                    <td>{{ $cliente['direccion']}}</td>
                    <td>{{ $cliente['telefono']}}</td>
                    <td>
                        <a href="{{ route('edit', $cliente['id']) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('show', $cliente['id']) }}" class="btn bg-light">Detalles</a>
                        <form action="{{ route('destroy', $cliente['id']) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Desea eliminar?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
