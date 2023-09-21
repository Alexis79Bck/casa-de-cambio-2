@extends('adminlte::page')

@section('title', __('Users'))

@section('content_header')
    <h1 class="m-0 text-dark">{{ __('Users') }}</h1>
@stop

@section('content')
 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <x-adminlte-datatable id="table1" :heads="$heads">
                        @foreach ($config['data'] as $row)
                            <tr>  
                                <td>{!! $row['id'] !!}</td>
                                <td>{!! $row['name'] !!}</td>
                                <td>{!! $row['email'] !!}</td>
                                <td>{!! $row['image_url'] !!}</td>
                                <td class="text-center">
                                    @foreach ($row['actions'] as $action)  
                                    <a class="{{ isset($action['class']) ? $action['class'] : 'btn btn-sm btn-link'}}" href="#" role="button" title="{{ isset($action['title']) ? $action['title'] : ''}}">
                                        <i class="fas fa-lg fa-fw {{$action['icon']}}"></i>{{ isset($action['label']) ? $action['label'] : ''}}
                                    </a>                          
                                    @endforeach
                                </td>
                                
                            </tr>
                        @endforeach
                    </x-adminlte-datatable>
            </div>
        </div>
    </div>
</div>
@stop
