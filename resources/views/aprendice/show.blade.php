@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-7 col-lg-6">

        <div class="card shadow-sm border-0">

            <div class="card-header text-white" style="background:#39A900;">

                <h1 class="h4 mb-0">
                    Aprendiz Registrado
                </h1>

            </div>

            <div class="card-body">

                <p>
                    <strong>ID:</strong>
                    {{ $aprendice['id'] }}
                </p>

                <p>
                    <strong>Nombre:</strong>
                    {{ $aprendice['name'] }}
                </p>

                <p>
                    <strong>Correo:</strong>
                    {{ $aprendice['email'] }}
                </p>

                <p>
                    <strong>Teléfono:</strong>
                    {{ $aprendice['cell_number'] }}
                </p>

                <p>
                    <strong>Curso:</strong>
                    {{ $aprendice['course_id'] ?? 'Sin curso' }}
                </p>

                <p>
                    <strong>Computador:</strong>
                    {{ $aprendice['computer_id'] ?? 'Sin computador' }}
                </p>

                <p>
                    <strong>Imagen:</strong>

                    @if (!empty($aprendice['urlFoto']))

                        <br>

                        <img src="{{ asset('storage/images/' . $aprendice['urlFoto']) }}"
                             alt="Imagen del aprendiz"
                             width="150"
                             height="120"
                             style="object-fit: cover; border-radius: 5px;">

                    @else

                        <span class="text-muted">
                            Sin imagen
                        </span>

                    @endif

                </p>

            </div>

            <div class="card-footer bg-white d-flex gap-2 flex-wrap">

                <a href="{{ route('aprendice.index') }}"
                   class="btn btn-success btn-sm">
                    Atrás
                </a>

            </div>

        </div>

    </div>

</div>

@endsection



