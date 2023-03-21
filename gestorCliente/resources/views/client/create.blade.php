@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <h3 class="text-center mb-4">Registro de clientes</h3>
        <form action="{{ route('store') }}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            {{-- Campo nombres --}}
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nombres:</label>
                <input type="text" class="form-control" name="nombres" id="validationCustom01" required placeholder="Escribe tu nombre">
                <div class="invalid-feedback">
                    Escribe tus nombres.
                </div>
            </div>

            {{-- Campo apellidos --}}
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" id="validationCustom02" required placeholder="Escribe tus apellidos">
                <div class="invalid-feedback">
                    Escribe tus apellidos
                </div>
            </div>

            {{-- Campo Email --}}
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Email:</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Escribe tu email">
                    <div class="invalid-feedback">
                        Escribe tu email.
                    </div>
                </div>
            </div>

            {{-- Campo Fecha Nacmiento --}}
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Fecha Nacimiento:</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" name="fecha_nacimiento" id="validationCustom03" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Fecha Nacmmiento
                    </div>
                </div>
            </div>

            {{-- Campo Departamento --}}
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Departamento:</label>
                <input type="text" class="form-control" name="departamento" id="validationCustom04" required placeholder="Escribe tu Departamento">
                <div class="invalid-feedback">
                    Escribe tu Departamento
                </div>
            </div>

            {{-- Campo Municipio --}}
            <div class="col-md-4">
                <label for="validationCustom05" class="form-label">Municipio:</label>
                <input type="text" class="form-control" name="municipio" id="validationCustom05" required placeholder="Escribe tu Municipio">
                <div class="invalid-feedback">
                    Escribe tu Municipio
                </div>
            </div>

            {{-- Campo Direccion --}}
            <div class="col-md-4">
                <label for="validationCustom06" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="validationCustom06" required placeholder="Escribe tu dirección">
                <div class="invalid-feedback">
                    Escribe tu Dirección
                </div>
            </div>

            {{-- Campo Dui --}}
            <div class="col-md-2">
                <label for="validationCustom07" class="form-label">Dui:</label>
                <input type="text" class="form-control" name="dui" id="validationCustom07" required placeholder="00000000-0">
                <div class="invalid-feedback">
                    Escribe tú numero de DUI
                </div>
            </div>

            {{-- Campo Telefono --}}
            <div class="col-md-2">
                <label for="validationCustom08" class="form-label">Telefono:</label>
                <input type="text" class="form-control" name="telefono" id="validationCustom08" required placeholder="0000-0000">
                <div class="invalid-feedback">
                    Escribe tu numero de telefono.
                </div>
            </div>

            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Sexo:</label>
                <select class="form-select" name="sexo" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <div class="invalid-feedback">
                    Selecciona una opcion
                </div>
            </div>

            <div class="col-12 text-center">
              <button class="btn btn-primary mt-5" type="submit">Registrar Cliente</button>
            </div>
        </form>
    </div>
@endsection
