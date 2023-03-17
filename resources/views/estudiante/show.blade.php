@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? "{{ __('Show') Estudiante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $estudiante->name }}
                        </div>
                        <div class="form-group">
                            <strong>Surname:</strong>
                            {{ $estudiante->surname }}
                        </div>
                        <div class="form-group">
                            <strong>Date Born:</strong>
                            {{ $estudiante->date_born }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $estudiante->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $estudiante->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
