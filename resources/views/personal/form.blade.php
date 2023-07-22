<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-6">
                {{ Form::label('DNI') }}
                {{ Form::text('DNI', $personal->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
                {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Rol') }}
                {{ Form::select('roles', $rol, null, ['class' => 'form-control' . ($errors->has('roles') ? ' is-invalid' : ''), 'placeholder' => 'Rol']) }}
                {!! $errors->first('roles', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Apellidos') }}
                {{ Form::text('apellidos', $personal->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
                {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Nombres') }}
                {{ Form::text('name', $personal->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('Direccion') }}
                {{ Form::text('direccion', $personal->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group col-md-6">
                <label>Ciudad</label>
                <select class="form-control" name="ciudad">
                    {{-- Quiero traer los datos de mi tabla personls usando el atributo enum --}}
                    @foreach ($personal->getCiudadOptions() as $key => $value)
                        <option value="{{ $key }}" {{ $personal->ciudad == $value ? 'selected' : '' }}>
                            {{ $value }}</option>
                    @endforeach
                </select>
            </div>

            {{-- <div class="form-group col-md-6">
                {{ Form::label('Ciudad') }}
                {{ Form::text('ciudad', $personal->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
                {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
            </div> --}}
            <div class="form-group col-md-6">
                {{ Form::label('Celular') }}
                {{ Form::text('telefono', $personal->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group col-md-6">
                {{ Form::label('Correo') }}
                {{ Form::text('email', $personal->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            {{-- <div class="form-group">
                {{ Form::label('password') }}
                {{ Form::text('password', $personal->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
                {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
            </div> --}}

            {{-- Hacer un Password Input con laravel colletive --}}
            <div class="form-group col-md-6">
                {{ Form::label('Contraseña') }}
                {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
                {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group col-md-6">
                <label>Genero</label>
                <select class="form-control" name="genero">
                    {{-- Quiero traer los datos de mi tabla personls usando el atributo enum --}}
                    @foreach ($personal->getGeneroOptions() as $key => $value)
                        <option value="{{ $key }}" {{ $personal->genero == $value ? 'selected' : '' }}>
                            {{ $value }}</option>
                    @endforeach
                </select>
            </div>



            {{-- <div class="form-group col-md-6">
                <label>Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fnacimiento">
            </div> --}}

            <div class="form-group col-md-6">
                {{ Form::label('fnacimiento', 'Fecha de Nacimiento') }}
                {{ Form::date('fnacimiento', null, ['class' => 'form-control']) }}
            </div>



            {{-- <div class="form-group">
                <label for="provincia">Provincia:</label>
                <select class="form-control" name="provincia" id="provincia">
                    <option value="">Seleccione una provincia</option>
                    @foreach ($provincias as $provincia)
                        <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="distrito">Distrito:</label>
                <select class="form-control" name="distrito" id="distrito">
                    <option value="">Seleccione un distrito</option>
                    @foreach ($distritos as $distrito)
                        <option value="{{ $distrito->id }}">{{ $distrito->nombre }}</option>
                    @endforeach
                </select>
            </div> --}}

            {{-- <div class="form-group">
                <label for="provincia">Provincia:</label>
                <select class="form-control" name="provincia" id="provincia">
                    <!-- Opciones de provincias cargadas dinámicamente -->
                </select>
            </div>

            <div class="form-group">
                <label for="distrito">Distrito:</label>
                <select class="form-control" name="distrito" id="distrito">
                    <!-- Opciones de distritos cargadas dinámicamente -->
                </select>
            </div> --}}


            <div class="form-group col-md-6">
                <label>Cargar foto</label>
                <input type="file" class="form-control" name="foto">
            </div>


            {{-- <div class="form-group">
                {{ Form::label('user_id') }}
                {{ Form::text('user_id', $personal->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
                {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
            </div> --}}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>



<script>
    // Cargar opciones de provincias al cargar la página
    window.addEventListener('DOMContentLoaded', function() {
        var provinciaSelect = document.getElementById('provincia');
        cargarProvincias(provinciaSelect);
    });

    // Manejar cambio en la selección de provincia
    document.getElementById('provincia').addEventListener('change', function() {
        var provinciaId = this.value;
        var distritoSelect = document.getElementById('distrito');
        cargarDistritos(provinciaId, distritoSelect);
    });

    // Función para cargar opciones de provincias
    function cargarProvincias(selectElement) {
        fetch('/provincias')
            .then(response => response.json())
            .then(data => {
                data.forEach(provincia => {
                    var option = document.createElement('option');
                    option.value = provincia.geonameId;
                    option.textContent = provincia.name;
                    selectElement.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    // Función para cargar opciones de distritos
    function cargarDistritos(provinciaId, selectElement) {
        var formData = new FormData();
        formData.append('provincia_id', provinciaId);

        fetch('/distritos', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                selectElement.innerHTML = ''; // Limpiar opciones existentes
                data.forEach(distrito => {
                    var option = document.createElement('option');
                    option.value = distrito.geonameId;
                    option.textContent = distrito.name;
                    selectElement.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
