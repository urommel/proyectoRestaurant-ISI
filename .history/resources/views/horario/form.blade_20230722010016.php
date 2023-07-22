{{-- <style>
    .checkbox-container {
        position: relative;
        width: 40px;
        height: 20px;
    }

    .checkbox-container input[type="checkbox"] {
        display: none;
    }

    .checkbox-container label {
        position: absolute;
        top: 0;
        left: 0;
        width: 40px;
        height: 20px;
        background-color: #ccc;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .checkbox-container label:after {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        width: 16px;
        height: 16px;
        background-color: #fff;
        border-radius: 50%;
        transition: transform 0.3s;
    }

    .checkbox-container input[type="checkbox"]:checked+label {
        background-color: #2196F3;
    }

    .checkbox-container input[type="checkbox"]:checked+label:after {
        transform: translateX(20px);
    }

    .checkbox-container input[type="checkbox"]:disabled+label {
        background-color: #ccc;
        cursor: not-allowed;
    }

    .horario-creado input[type="checkbox"]+label {
        background-color: red;
        /* Color de fondo rojo */
    }
</style> --}}

<style>
    .checkbox-container {
        position: relative;
        width: 40px;
        height: 20px;
    }

    .checkbox-container input[type="checkbox"] {
        display: none; /* Oculta el checkbox */
    }

    .checkbox-container label {
        position: absolute;
        top: 0;
        left: 0;
        width: 40px;
        height: 20px;
        background-color: #ccc;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .checkbox-container label:after {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        width: 16px;
        height: 16px;
        background-color: #fff;
        border-radius: 50%;
        transition: transform 0.3s;
    }

    .checkbox-container input[type="checkbox"]:checked+label {
        background-color: #2196F3;
    }

    .checkbox-container input[type="checkbox"]:checked+label:after {
        transform: translateX(20px);
    }

    .checkbox-container input[type="checkbox"]:disabled+label {
        display: none; /* Oculta el label (checkbox) cuando está deshabilitado */
    }


    .horario-creado span {
        display: inline-block;
        background-color: lightgray;
        color: red;
        padding: 5px 10px; /* Ajusta el padding para hacer el texto más largo */
        border-radius: 5px;
        font-size: 14px; /* Ajusta el tamaño de fuente */
        transition: all 0.3s; /* Agrega una transición para animar los cambios */
    }

    .horario-creado span:hover {
        padding: 5px 20px; /* Ajusta el padding al hacer hover para hacer el texto más largo */
        font-size: 16px; /* Ajusta el tamaño de fuente al hacer hover */
    }
</style>

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="card-header d-flex justify-content-between">
            <p class="fs-5">Asignar horario al <Label class="fw-bold">
                    {{ $person->user()->first()->roles()->first()->name }}
                </Label>
                {{ $person->user()->first()->name }} {{ $person->apellidos }}
            </p>
            {{ Form::hidden('personal_id', $person->id) }}

            <a class="btn btn-primary" href="{{ route('personal.index', $person->id) }}">{{ __('Regresar') }}</a>
        </div>

        <table class="table align-items-center table-flush">
            <thead>
                <tr>
                    <th>Día</th>
                    <th>Trabaja</th>
                    <th>Hora de inicio</th>
                    <th>Hora de finalización</th>
                </tr>
            </thead>

            <tbody>
                @foreach (['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'] as $dia)
                    {{-- <tr>
                        <td>{{ $dia }}</td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="horarios[{{ strtolower($dia) }}][trabaja]" value="1"
                                    id="checkbox-{{ strtolower($dia) }}" class="trabaja-checkbox"
                                    {{ in_array(strtolower($dia), $horariosExistentes) ? 'disabled' : '' }}>
                                <label for="checkbox-{{ strtolower($dia) }}"></label>
                            </div>
                        </td>
                        <td>
                            <input type="time" name="horarios[{{ strtolower($dia) }}][hora_inicio]"
                                class="form-control hora-inicio" disabled>
                        </td>
                        <td>
                            <input type="time" name="horarios[{{ strtolower($dia) }}][hora_fin]"
                                class="form-control hora-fin" disabled>
                        </td>
                    </tr> --}}

                    <tr>
                        <td>{{ $dia }}</td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="horarios[{{ strtolower($dia) }}][trabaja]" value="1"
                                    id="checkbox-{{ strtolower($dia) }}" class="trabaja-checkbox"
                                    {{ in_array(strtolower($dia), $horariosExistentes) ? 'disabled' : '' }}>
                                <label for="checkbox-{{ strtolower($dia) }}"></label>
                            </div>
                        </td>
                        <td>
                            <input type="time" name="horarios[{{ strtolower($dia) }}][hora_inicio]"
                                class="form-control hora-inicio" disabled>
                        </td>
                        <td>
                            <input type="time" name="horarios[{{ strtolower($dia) }}][hora_fin]"
                                class="form-control hora-fin" disabled>
                        </td>
                    </tr>

                @endforeach
            </tbody>



        </table>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>


    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.trabaja-checkbox');
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    const row = this.closest('tr');
                    const horaInicioInput = row.querySelector('.hora-inicio');
                    const horaFinInput = row.querySelector('.hora-fin');

                    if (this.checked) {
                        horaInicioInput.removeAttribute('disabled');
                        horaFinInput.removeAttribute('disabled');
                    } else {
                        horaInicioInput.setAttribute('disabled', 'disabled');
                        horaFinInput.setAttribute('disabled', 'disabled');
                    }
                });
            });
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.trabaja-checkbox');
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    const row = this.closest('tr');
                    const horaInicioInput = row.querySelector('.hora-inicio');
                    const horaFinInput = row.querySelector('.hora-fin');

                    if (this.checked) {
                        horaInicioInput.removeAttribute('disabled');
                        horaFinInput.removeAttribute('disabled');
                    } else {
                        horaInicioInput.setAttribute('disabled', 'disabled');
                        horaFinInput.setAttribute('disabled', 'disabled');
                    }
                });
            });

            // Reemplazar checkbox por texto "Día asignado" si corresponde
            const horariosExistentes = {!! json_encode($horariosExistentes) !!};
            horariosExistentes.forEach(function(dia) {
                const checkbox = document.querySelector(`#checkbox-${dia}`);
                if (checkbox) {
                    const container = checkbox.closest('.checkbox-container');
                    container.classList.add('horario-creado');
                    container.innerHTML = '<span>Día asignado</span>';
                }
            });
        });
    </script>

</div>