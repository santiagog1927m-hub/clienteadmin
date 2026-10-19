@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <!-- ENCABEZADO -->
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">

            <div>

                <h5 class="mb-0 fw-bold">
                    Detalle del Centro de Formación
                </h5>

                <small>
                    Información del registro #{{ $training_center['id'] }}
                </small>

            </div>

            <a href="{{ route('training_center.index') }}"
               class="btn btn-light btn-sm">

                Volver

            </a>

        </div>

        <!-- INFORMACIÓN -->
        <div class="card-body p-4">

            <!-- ID -->
            <div class="mb-3 border-bottom pb-2">

                <label class="form-label text-success fw-bold">
                    ID
                </label>

                <p class="fs-5 mb-0">
                    {{ $training_center['id'] }}
                </p>

            </div>

            <!-- NOMBRE -->
            <div class="mb-3 border-bottom pb-2">

                <label class="form-label text-success fw-bold">
                    Nombre del Centro
                </label>

                <p class="fs-5 mb-0">
                    {{ $training_center['name'] }}
                </p>

            </div>

            <!-- UBICACIÓN -->
            <div class="mb-3">

                <label class="form-label text-success fw-bold">
                    Ubicación
                </label>

                <p class="fs-5 mb-0">
                    {{ $training_center['location'] }}
                </p>

            </div>

        </div>

        <!-- PIE -->
        <div class="card-footer bg-light text-end">

            <a href="{{ route('training_center.index') }}"
               class="btn btn-success">

                Regresar a la lista

            </a>

        </div>

    </div>

</div>

@endsection