@extends('adminlte::page')

@section('title', __('Users'))

@section('content_header')
    <h1 class="m-0 text-dark">{{ __('Users') }}</h1>
@stop

@section('content')
    {{-- Setup data for datatables --}}
    @php
        $heads = ['ID', 'Name', 'Email', 'Image', ''];
        
        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';
             
        $usersData = array_map(fn($user) => $user = [...$user,  'actions' => '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'], $users->toArray());
     
        $config = [
            'data' => $usersData,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('register')}}" role="button">+ Nuevo</a>
                </div>
                <div class="card-body">
                    <x-adminlte-datatable id="table1" :heads="$heads">
                        @foreach ($config['data'] as $row)
                            <tr>                                
                                @foreach ($row as $cell)
                                    <td>{!! $cell !!}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </x-adminlte-datatable>
            </div>
        </div>
    </div>
</div>
@stop
