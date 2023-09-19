@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Nota
@endsection
@php
use Carbon\Carbon;
@endphp
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Nota</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @php
                                // $nota->fechaGuarda = Carbon::now();
                                // $nota->fechaElimina = Carbon::now();
                                // $nota->fechaReactiva = Carbon::now();
                            @endphp
                            @include('nota.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
