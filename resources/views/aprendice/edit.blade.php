@extends('layouts.app')

@section('content')

<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">

            <div class="card shadow-sm border-0">

                <div class="card-header text-white" style="background:#39A900;">
                    <h1 class="h4 mb-0">
                        Actualizar Aprendiz
                    </h1>
                </div>

                <div class="card-body">

                    <form action="{{ route('aprendice.update', $aprendice['id']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- NOMBRE -->
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Nombre:
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name', $aprendice['name'] ?? '') }}"
                                class="form-control"
                                required
                            >
                        </div>

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email:
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email', $aprendice['email'] ?? '') }}"
                                class="form-control"
                                required
                            >
                        </div>

                        <!-- CELULAR -->
                        <div class="mb-3">
                            <label for="cell_number" class="form-label">
                                Celular:
                            </label>

                            <input
                                type="text"
                                id="cell_number"
                                name="cell_number"
                                value="{{ old('cell_number', $aprendice['cell_number'] ?? '') }}"
                                class="form-control"
                                required
                            >
                        </div>

                        <!-- CURSO -->
                        <div class="mb-3">
                            <label for="course_id" class="form-label">
                                Curso:
                            </label>

                            <select
                                name="course_id"
                                id="course_id"
                                class="form-select"
                                required
                            >
                                @foreach ($courses as $course)
                                    <option
                                        value="{{ $course['id'] }}"
                                        {{ old('course_id', $aprendice['course_id'] ?? '') == $course['id'] ? 'selected' : '' }}
                                    >
                                        {{ $course['course_number'] ?? 'Curso ' . $course['id'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- COMPUTADOR -->
                        <div class="mb-3">
                            <label for="computer_id" class="form-label">
                                Computador:
                            </label>

                            <select
                                name="computer_id"
                                id="computer_id"
                                class="form-select"
                                required
                            >
                                @foreach ($computers as $computer)
                                    <option
                                        value="{{ $computer['id'] }}"
                                        {{ old('computer_id', $aprendice['computer_id'] ?? '') == $computer['id'] ? 'selected' : '' }}
                                    >
                                        {{ $computer['number'] ?? 'Computador ' . $computer['id'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- BOTONES -->
                        <div class="d-flex gap-2 flex-wrap">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i>
                                Actualizar Aprendiz
                            </button>

                            <a href="{{ route('aprendice.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i>
                                Atrás
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection


