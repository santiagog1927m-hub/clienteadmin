@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Formulario Training Center
            </h4>

            <small>
                Complete la información del nuevo centro de formación
            </small>

        </div>

        <!-- FORMULARIO -->
        <div class="card-body p-4">

            <form action="{{ route('training_center.store') }}"
                  method="POST">

                @csrf

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
                           value="{{ old('name') }}"
                           placeholder="Ingrese el nombre del centro"
                           required>

                </div>

                <!-- UBICACIÓN -->
                <div class="mb-3">

                    <label for="location"
                           class="form-label fw-bold text-success">
                        Ubicación
                    </label>

                    <input type="text"
                           name="location"
                           id="location"
                           class="form-control"
                           value="{{ old('location') }}"
                           placeholder="Ingrese la ubicación del centro"
                           required>

                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('training_center.index') }}"
                       class="btn btn-secondary">
                        Atras
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Guardar Centro
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection