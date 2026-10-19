@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8 col-lg-7">

        <div class="card shadow-sm border-0">

            <div class="card-header text-white" style="background:#39A900;">

                <h1 class="h4 mb-0">
                    Actualizar Área
                </h1>

            </div>


            <div class="card-body">

                <form action="{{ route('area.update', ['area' => $area['id']]) }}" method="POST">

                    @csrf
                    @method('PUT')


                    <div class="mb-3">

                        <label class="form-label">
                            Nombre:
                        </label>

                        <input type="text"
                               name="name"
                               value="{{ old('name', $area['name']) }}"
                               class="form-control"
                               required>

                    </div>


                    <div class="d-flex gap-2 flex-wrap">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i>
                                Actualizar Area
                            </button>

                            <a href="{{ route('area.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i>
                                Atrás
                            </a>
                        </div>

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection

