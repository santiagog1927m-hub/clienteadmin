@extends('layouts.app')

@section('content')

<div class="container mt-2 mb-5">

    <!-- ENCABEZADO -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="mb-0" style="font-size: 38px; font-weight: 500;">
            APRENDICES
        </h1>

        <a href="{{ route('aprendice.create') }}"
           class="btn btn-success">
            <i class="bi bi-plus-circle"></i> NUEVO APRENDIZ
        </a>

    </div>

    <!-- TABLA DE APRENDICES -->
    <div class="table-responsive">

        <table id="idProduct"
               class="table table-striped table-bordered align-middle w-100">

            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Número celular</th>
                    <th>Curso</th>
                    <th>Computador</th>
                    <th>Imagen</th>
                    <th style="min-width: 170px;">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($aprendices as $aprendice)

                    <tr>

                        <td>{{ $aprendice['name'] ?? '' }}</td>

                        <td>{{ $aprendice['email'] ?? '' }}</td>

                        <td>{{ $aprendice['cell_number'] ?? '' }}</td>

                        <td>{{ $aprendice['course_id'] ?? '' }}</td>

                        <td>{{ $aprendice['computer_id'] ?? '' }}</td>

                        <!-- IMAGEN -->
                        <td>
                            @if (!empty($aprendice['urlFoto']))

                                <img src="{{ asset('storage/images/' . $aprendice['urlFoto']) }}"
                                     alt="Imagen del aprendiz"
                                     width="60"
                                     height="60"
                                     style="object-fit: cover; border-radius: 5px;">

                            @else

                                <span class="text-muted">Sin imagen</span>

                            @endif
                        </td>

                        <!-- ACCIONES -->
                        <td class="text-nowrap">

                            <a href="{{ route('aprendice.show', $aprendice['id']) }}"
                               class="btn btn-success btn-sm"
                               title="Mostrar">
                                Mostrar
                            </a>

                            <a href="{{ route('aprendice.edit', $aprendice['id']) }}"
                               class="btn btn-warning btn-sm"
                               title="Editar">
                                Editar
                            </a>

                            <form action="{{ route('aprendice.destroy', $aprendice['id']) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        title="Eliminar"
                                        onclick="return confirm('¿Está seguro de eliminar este aprendiz?')">
                                    Eliminar
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="text-center">
                            No hay aprendices registrados.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection


