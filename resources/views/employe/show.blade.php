@extends('layouts.app')

@section('template_title')
    {{ $employe->name ?? __('Show') . " " . __('Employe') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employe</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('employe.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $employe->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prenom:</strong>
                                    {{ $employe->prenom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Departement:</strong>
                                    {{ $employe->departement }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Poste:</strong>
                                    {{ $employe->poste }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tache Id:</strong>
                                    {{ $employe->tache_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
