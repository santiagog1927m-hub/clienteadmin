
@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <div class="card-header text-white" style="background:#39A900;">

            <h1 class="h4 mb-0">
                Formulario Computador
            </h1>

        </div>

        <div class="card-body">

            <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Número:
                    </label>

                    <input type="number"
                           name="number"
                           value="{{ old('number') }}"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Marca:
                    </label>

                    <input type="text"
                           name="brand"
                           value="{{ old('brand') }}"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Imagen del computador:
                    </label>

                    <input type="file"
                           name="imagen"
                           class="form-control"
                           accept="image/*"
                           required>

                </div>

                <div class="d-flex gap-2">

                    <a href="{{ route('computer.index') }}"
                       class="btn btn-secondary">
                        Atrás
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Guardar Computador
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

