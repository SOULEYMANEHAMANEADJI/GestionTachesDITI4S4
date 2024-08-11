@extends('layouts.app')

@section('template_title')
    {{ $tach->name ?? __('Show') . " " . __('Tach') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tach</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tache.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $tach->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $tach->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Niveau Complexite:</strong>
                                    {{ $tach->niveau_complexite }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
