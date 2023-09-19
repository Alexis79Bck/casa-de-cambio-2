@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Dashboard')}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Hola !!! Usuario {{ Auth::user()->name }}</p>
                </div>
            </div>
        </div>
    </div>
@stop
