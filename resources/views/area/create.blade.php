@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 700px;">

    <div class="card shadow-sm border-0">

        <div class="card-header text-white" style="background:#39A900;">

            <h1 class="h4 mb-0">
                Formulario Área
            </h1>

        </div>


        <div class="card-body">

            <form action="{{ route('area.store') }}" method="POST">

                @csrf


                <div class="mb-3">

                    <label class="form-label">
                        Nombre:
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           class="form-control"
                           required>

                </div>

                <!-- BOTONES -->
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('area.index') }}"
                       class="btn btn-secondary">
                        Atras
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        Guardar Area
                    </button>

                </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection

