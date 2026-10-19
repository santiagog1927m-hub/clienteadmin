@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h1>TEACHERS</h1>

        <a href="{{ route('teacher.create') }}"
           class="btn btn-success">

            <i class="bi bi-plus-circle"></i>
            NUEVOS INSTRUCTORES

        </a>

    </div>

    <table id="idProduct"
           class="table table-striped table-bordered"
           style="width:100%">

        <thead>

            <tr>

                <th>Nombre</th>
                <th>Correo</th>
                <th>Id de área</th>
                <th>Id centro</th>
                <th>Imagen</th>
                <th>Acciones</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($teachers as $teacher)

                <tr>

                    <!-- NOMBRE -->
                    <td>
                        {{ $teacher['name'] }}
                    </td>

                    <!-- CORREO -->
                    <td>
                        {{ $teacher['email'] }}
                    </td>

                    <!-- ÁREA -->
                    <td>
                        {{ $teacher['area_id'] }}
                    </td>

                    <!-- CENTRO -->
                    <td>
                        {{ $teacher['training_center_id'] }}
                    </td>

                    <!-- IMAGEN -->
                    <td>

                        @if (!empty($teacher['urlFoto']))

                            <img src="{{ asset('storage/images/' . $teacher['urlFoto']) }}"
                                 alt="Imagen del instructor"
                                 width="80"
                                 height="60"
                                 style="object-fit: cover; border-radius: 5px;">

                        @else

                            <span class="text-muted">
                                Sin imagen
                            </span>

                        @endif

                    </td>

                    <!-- ACCIONES -->
                    <td>

                        <a href="{{ route('teacher.show', $teacher['id']) }}"
                           class="btn btn-success btn-sm">
                            Mostrar
                        </a>

                        <a href="{{ route('teacher.edit', $teacher['id']) }}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>

                        <form action="{{ route('teacher.destroy', $teacher['id']) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Está seguro de eliminar este instructor?')">

                                Eliminar

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection