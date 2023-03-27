@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <h3 class="text-center mb-4">Registro de clientes</h3>
        <form action="{{ route('store') }}" method="POST" class="row g-3 needs-validation"  novalidate>
            @csrf
            {{-- Campo nombres --}}
            <div class="col-md-4">
                <label for="nombres" class="form-label">Nombres:</label>
                <input type="text" class="form-control" name="nombres" id="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚ, ]+" required placeholder="Escribe tu nombre">
                <div class="invalid-feedback">Por favor, ingrese un nombre válido (No se permiten numeros)</div>
                <div class="valid-feedback">El nombre es válido</div>
            </div>

            {{-- Campo apellidos --}}
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" id="validationCustom02" pattern="[a-zA-ZáéíóúÁÉÍÓÚ, ]+" required placeholder="Escribe tus apellidos">
                <div class="invalid-feedback">Por favor, ingrese sus apellidos (No se permiten numeros)</div>
                <div class="valid-feedback">El apellidos es válido</div>
            </div>

            {{-- Campo Email --}}
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Email:</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Escribe tu email">
                    <div class="invalid-feedback">
                        Escribe tu email.
                    </div>
                    <div class="valid-feedback">Email Valido !</div>
                </div>
            </div>

            {{-- Campo Fecha Nacmiento --}}
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Fecha Nacimiento:</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" name="fecha_nacimiento" id="validationCustom03" aria-describedby="inputGroupPrepend" max="2008-03-21" required>
                    <div class="invalid-feedback">
                        Ingresa tu fecha de nacimiento, ¡¡ Debes ser mayor a de 15 años para pder registrarte !!.
                    </div>
                    <div class="valid-feedback">Fecha De Nacimiento Valida !!</div>
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
                <input type="text" class="form-control" name="direccion" id="validationCustom06" pattern="[a-zA-ZáéíóúÁÉÍÓÚ., ]+" required placeholder="Escribe tu dirección">
                <div class="invalid-feedback">Por favor, ingrese una direccion válida (No se permiten numeros)</div>
                <div class="valid-feedback">El dirección es válida !</div>
            </div>

            {{-- Campo Dui --}}
            <div class="col-md-2">
                <label for="dui" class="form-label">Dui:</label>
                <input type="text" class="form-control minlength" name="dui" id="dui" required placeholder="Ingresa tu DUI" onkeyup="formatearDUI()" required>
                <div class="invalid-feedback">
                    Tu numero de DUI debe tener 10 digitos (sin espacios ni guiones).
                </div>
                <div class="valid-feedback">Tu numero de DUI, es valido !</div>
            </div>

            {{-- Campo Telefono --}}
            <div class="col-md-2">
                <label for="validationCustom08" class="form-label">Telefono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" minlength="8" maxlength="9" onkeyup="formatearTelefono()" required>
                <div class="invalid-feedback">
                    Escribe tu numero de telefono.
                </div>
                <div class="valid-feedback">Numero de telefono correcto !</div>
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
              <button type="submit" class="btn btn-primary mt-5 p-2">Registrar Cliente</button>
              <a href="{{ route('index') }}" class="btn btn-danger mt-5 p-2">Cancelar Registro</a>
            </div>
        </form>
    </div>
@endsection
