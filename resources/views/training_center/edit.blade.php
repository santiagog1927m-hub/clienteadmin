
@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <div class="card-header bg-success text-white">

            <h4 class="mb-0 fw-bold">
                Editar Centro de Formación
            </h4>

            <small>
                Modifique la información del centro
            </small>

        </div>

        <div class="card-body p-4">

            <form action="{{ route('training_center.update', ['training_center' => $training_center['id']]) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label for="name" class="form-label fw-bold text-success">
                        Nombre
                    </label>

                    <input type="text"
                           name="name"
                           id="name"
                           class="form-control"
                           value="{{ old('name', $training_center['name']) }}"
                           required>

                </div>

                <div class="mb-3">

                    <label for="location" class="form-label fw-bold text-success">
                        Ubicación
                    </label>

                    <input type="text"
                           name="location"
                           id="location"
                           class="form-control"
                           value="{{ old('location', $training_center['location']) }}"
                           required>

                </div>

                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('training_center.index') }}"
                       class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-success">
                        Actualizar Centro
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
