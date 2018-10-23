@extends('layouts.app')

@section('title', "Crear Dependencia")

@section('content')
    @card
    @slot('header', 'Nueva dependencia')

    @include('shared._errors')

    <form method="POST" action="{{ url('dependencia') }}">
        @render('DependenciesFields', ['dependency' => $dependency])

        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Crear dependencia</button>
            <a href="{{ route('dependencies.index') }}" class="btn btn-link">Regresar al listado de dependencias</a>
        </div>
    </form>
    @endcard
@endsection
