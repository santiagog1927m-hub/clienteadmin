@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8 col-lg-7">

        <div class="card shadow-sm border-0">

            <div class="card-header text-white" style="background:#39A900;">

                <h1 class="h4 mb-0">
                    Actualizar Computador
                </h1>

            </div>


            <div class="card-body">

                <form action="{{ route('computer.update', ['computer' => $computer['id']]) }}" method="POST">

                    @csrf
                    @method('PUT')


                    <div class="mb-3">

                        <label class="form-label">
                            Número:
                        </label>

                        <input type="number"
                               name="number"
                               value="{{ old('number', $computer['number']) }}"
                               class="form-control"
                               required>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Marca:
                        </label>

                        <input type="text"
                               name="brand"
                               value="{{ old('brand', $computer['brand']) }}"
                               class="form-control"
                               required>

                    </div>


                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i>
                                Actualizar Computador
                            </button>

                            <a href="{{ route('computer.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i>
                                Atrás
                            </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection
