@extends('layouts.app')

@section('title', "Crear Dependencia")

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @card
                @slot('header', 'Nueva dependencia')

                @include('shared._errors')

                <form method="POST" action="{{ url('dependencias') }}">
                    @render('DependenciesFields', ['dependency' => $dependency])

                    <div class="form-group mt-4 row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Crear dependencia</button>
                            <a href="{{ route('dependencies.index') }}" class="btn btn-link">Regresar al listado de dependencias</a>
                        </div>
                    </div>
                </form>
                @endcard
            </div>
        </div>
    </div>

@endsection
