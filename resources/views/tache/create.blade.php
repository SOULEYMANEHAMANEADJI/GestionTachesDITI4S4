@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tach
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tach</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tache.store') }}" role="form"
                              enctype="multipart/form-data">
                            @csrf

                            @include('tache.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
