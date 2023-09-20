@extends('adminlte::page')

@section('title', __('Admin'))

@section('content_header')
    <h1 class="m-0 text-dark">{{ __('Admin') }}</h1>
@stop

@section('content')
    <div class="container text-center"> PRESENTAR EL LAYOUT </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>titulo</h1>
                </div>
                <div class="card-body">
                    <h4>Cualquier Componente</h4>
                    <x-adminlte-button label="Primary" theme="primary" icon="fas fa-key"/>
            </div>
        </div>
    </div>
</div>
@stop