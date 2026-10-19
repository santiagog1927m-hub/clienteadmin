
@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">

        <div class="card shadow-sm border-0">

            <div class="card-header text-white"
                 style="background:#39A900;">
                <h1 class="h4 mb-0">
                    Computador Registrado
                </h1>
            </div>

            <div class="card-body">

                <p>
                    <strong>ID:</strong>
                    {{ $computer['id'] }}
                </p>

                <p>
                    <strong>Número:</strong>
                    {{ $computer['number'] }}
                </p>

                <p>
                    <strong>Marca:</strong>
                    {{ $computer['brand'] }}
                </p>

            </div>

            <div class="card-footer bg-white">
                 <a href="{{ route('computer.index') }}"
                   class="btn btn-success btn-sm">
                    Atrás
                </a>
            </div>

        </div>

    </div>
</div>

@endsection


