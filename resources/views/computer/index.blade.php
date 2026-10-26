

@extends('layouts.app')

@section('content')

<div class="container mt-2 mb-5">

    
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="mb-0" style="font-size: 38px; font-weight: 500;">
            COMPUTADORES
        </h1>

        <a href="{{ route('computer.create') }}"
           class="btn btn-success">
            <i class="bi bi-plus-circle"></i> NUEVO COMPUTADOR
        </a>

    </div>

    
    <div class="table-responsive">

        <table id="idProduct"
               class="table table-striped table-bordered align-middle w-100">

            <thead class="table-light">
                <tr>
                    <th>Número</th>
                    <th>Marca</th>
                    <th>Imagen</th>
                    <th style="min-width: 250px;">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($computers as $computer)

                    <tr>

                        
                        <td>{{ $computer['number'] ?? '' }}</td>

                        
                        <td>{{ $computer['brand'] ?? '' }}</td>

                        
                        <td>
                           @if (!empty($computer['imagen_url']))
                            <img src="{{ $computer['imagen_url'] }}"
                                alt="Imagen del computador"
                                width="100">
                            @else
                                Sin imagen
                                    @endif
                        </td>

                        
                        <td class="text-nowrap">

                            <a href="{{ route('computer.show', $computer['id']) }}"
                               class="btn btn-success btn-sm"
                               title="Mostrar">
                                Mostrar
                            </a>

                            <a href="{{ route('computer.edit', $computer['id']) }}"
                               class="btn btn-warning btn-sm"
                               title="Editar">
                                Editar
                            </a>

                            <form action="{{ route('computer.destroy', $computer['id']) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        title="Eliminar"
                                        onclick="return confirm('¿Está seguro de eliminar este computador?')">
                                    Eliminar
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="4" class="text-center">
                            No hay computadores registrados.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection


