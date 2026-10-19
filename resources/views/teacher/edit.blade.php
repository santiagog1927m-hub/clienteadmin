@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Editar Instructor
            </h4>

            <small>
                Modifique la información del instructor
            </small>

        </div>

        <!-- FORMULARIO -->
        <div class="card-body p-4">

            <form action="{{ route('teacher.update', $teacher->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <!-- NOMBRE -->
                <div class="mb-3">

                    <label for="name"
                           class="form-label fw-bold text-success">
                        Nombre
                    </label>

                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control"
                           value="{{ old('name', $teacher->name) }}"
                           required>

                </div>

                <!-- EMAIL -->
                <div class="mb-3">

                    <label for="email"
                           class="form-label fw-bold text-success">
                        Correo
                    </label>

                    <input type="email"
                           name="email"
                           id="email"
                           class="form-control"
                           value="{{ old('email', $teacher->email) }}"
                           required>

                </div>

                <!-- ÁREA -->
                <div class="mb-3">

                    <label for="area_id"
                           class="form-label fw-bold text-success">
                        Área
                    </label>

                    <select name="area_id"
                            id="area_id"
                            class="form-select"
                            required>

                        @foreach ($areas as $area)

                            <option value="{{ $area->id }}"
                                {{ $teacher->area_id == $area->id ? 'selected' : '' }}>

                                {{ $area->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- CENTRO DE FORMACIÓN -->
                <div class="mb-3">

                    <label for="training_center_id"
                           class="form-label fw-bold text-success">
                        Centro de Formación
                    </label>

                    <select name="training_center_id"
                            id="training_center_id"
                            class="form-select"
                            required>

                        @foreach ($training_centers as $training_center)

                            <option value="{{ $training_center->id }}"
                                {{ $teacher->training_center_id == $training_center->id ? 'selected' : '' }}>

                                {{ $training_center->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('teacher.list') }}"
                       class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Actualizar Instructor
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection