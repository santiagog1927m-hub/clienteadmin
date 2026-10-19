@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-7 col-lg-6">

        <div class="card shadow-sm border-0">

            <div class="card-header text-white"
                 style="background:#39A900;">

                <h1 class="h4 mb-0">
                    Área Registrada
                </h1>

            </div>


            <div class="card-body">

                <p>
                    <strong>ID:</strong>
                    {{ $area['id'] }}
                </p>

                <p>
                    <strong>Nombre:</strong>
                    {{ $area['name'] }}
                </p>

            </div>


            <div class="card-footer bg-white d-flex gap-2 flex-wrap">

                <a href="{{ route('area.index') }}"
                   class="btn btn-success btn-sm">
                    Atrás
                </a>

                <form action="{{ route('area.destroy', $area['id']) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                </form>

            </div>

        </div>

    </div>

</div>

@endsection


