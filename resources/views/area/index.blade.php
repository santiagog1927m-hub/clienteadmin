
@extends('layouts.app')

@section('content')

<div class="container mt-2 mb-5">

    <!-- ENCABEZADO -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="mb-0" style="font-size: 38px; font-weight: 500;">
            ÁREAS DE FORMACIÓN
        </h1>

        <a href="{{ route('area.create') }}"
           class="btn btn-success">
            <i class="bi bi-plus-circle"></i> NUEVA ÁREA
        </a>

    </div>

    <!-- TABLA DE ÁREAS -->
    <div class="table-responsive">

        <table id="idProduct"
               class="table table-striped table-bordered align-middle w-100">

            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th style="min-width: 250px;">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($areas as $area)

                    <tr>

                        <!-- NOMBRE -->
                        <td>
                            {{ $area['name'] ?? '' }}
                        </td>

                        <!-- ACCIONES -->
                        <td class="text-nowrap">

                            <a href="{{ route('area.show', $area['id']) }}"
                               class="btn btn-success btn-sm">
                                Mostrar
                            </a>

                            <a href="{{ route('area.edit', $area['id']) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('area.destroy', $area['id']) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Está seguro de eliminar esta área?')">
                                    Eliminar
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="2" class="text-center">
                            No hay áreas de formación registradas.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection


