@extends('layout.app')
@section('content')
    <h2 class="text-center display-6 mt-4">Datos del Cliente</h2>
    <div class="container">
        <div class="row">
            <form class="row g-3 needs-validation" novalidate>
                @foreach ($clientes as $cliente)
                {{-- Campo nombres --}}
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nombres:</label>
                    <input type="text" class="form-control" name="nombres" value="{{ $cliente['nombres']}}" disabled>
                </div>

                {{-- Campo apellidos --}}
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" value="{{ $cliente['apellidos']}}" disabled>
                </div>

                {{-- Campo Email --}}
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Email:</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" name="email" value="{{ $cliente['email']}}" id="validationCustomUsername" aria-describedby="inputGroupPrepend" disabled>
                    </div>
                </div>

                {{-- Campo Fecha Nacmiento --}}
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Fecha Nacimiento:</label>
                    <div class="input-group has-validation">
                        <input type="date" class="form-control" name="fecha_nacimiento" value="{{ $cliente['fecha_nacimiento']}}" id="validationCustom03" aria-describedby="inputGroupPrepend" disabled>
                    </div>
                </div>

                {{-- Campo Departamento --}}
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Departamento:</label>
                    <input type="text" class="form-control" name="departamento" value="{{ $cliente['departamento']}}" disabled>
                </div>

                {{-- Campo Municipio --}}
                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Municipio:</label>
                    <input type="text" class="form-control" name="municipio" value="{{ $cliente['municipio']}}" disabled>
                </div>

                {{-- Campo Direccion --}}
                <div class="col-md-4">
                    <label for="validationCustom06" class="form-label">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" value="{{ $cliente['direccion']}}" disabled>
                </div>

                {{-- Campo Dui --}}
                <div class="col-md-2">
                    <label for="validationCustom07" class="form-label">Dui:</label>
                    <input type="text" class="form-control" name="dui" value="{{ $cliente['dui']}}" id="validationCustom07" disabled>
                </div>

                {{-- Campo Telefono --}}
                <div class="col-md-2">
                    <label for="validationCustom08" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" name="telefono" value="{{ $cliente['telefono']}}" disabled>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Sexo:</label>
                    <select class="form-select" name="sexo"  id="validationCustom04" disabled>
                        <option value="{{ $cliente['sexo']}}">{{ $cliente['sexo']}}</option>
                    </select>
                </div>
                @endforeach
            </form>
        </div>
    </div>
@endsection
