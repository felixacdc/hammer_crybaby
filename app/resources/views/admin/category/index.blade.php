@extends('admin.layout.template')

@section('styles')
    <!-- Plugin -->
    {!! Html::style('template/vendor/datatables-bootstrap/dataTables.bootstrap.css') !!}
    {!! Html::style('template/vendor/datatables-responsive/dataTables.responsive.css') !!}
    {!! Html::style('template/vendor/datatables-responsive/dataTables.responsive.css') !!}
    {!! Html::style('assets/vendor/filament-tablesaw/tablesaw.css') !!}

    {!! Html::style('template/vendor/formvalidation/formValidation.css') !!}

    <style>
        .tablesaw-bar.mode-swipe {
            display: inline-block !important;
        }
    </style>
@endsection

@section('localsMenu', 'active')

@section('content')
    <!-- Page -->
    <div class="page" >
        <div class="page-content">
            @include('admin.layout.partials.alertSuccess')
            @include('admin.layout.partials.alertErrors')
            <!-- Panel Basic -->
            <div class="panel">
                <header class="panel-heading">
                    <div class="panel-actions text-right">
                        <button type="button" name="create" class="btn btn-primary btn-sm loadModal spaceRight" data-toggle='modal' data-target='#generalModal' data-url="/admin/categories/create" data-title="Crear Categoria">
                            <i class="icon wb-plus" aria-hidden="true"></i>
                            Crear Categoria
                        </button>
                    </div>
                    <h3 class="panel-title">Categorias</h3>
                </header>
                <div class="panel-body">
                    <table class="table tablesaw table-hover dataTable table-striped tablesaw-swipe tablesaw-fix-persist" data-tablesaw-mode="swipe" data-tablesaw-minimap="" id="table-9456" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th data-tablesaw-priority="persist" class="tablesaw-cell-persist">No.</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->description }}</td>
                                <td> <img src="/image/{{$value->image}}" alt="" style="width:80px;"></td>
                                <td class="text-center">
                                    <button type="button" name="show" class="btn btn-icon btn-success btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="/admin/locals/{{ $value->id }}" data-title="Ver Local">
                                        <i class="icon wb-eye" aria-hidden="true"></i>
                                    </button>
                                   <button type="button" name="edit" class="btn btn-icon btn-info btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="/admin/locals/{{ $value->id }}/edit" data-title="Actualizar Profesor">
                                       <i class="icon wb-pencil" aria-hidden="true"></i>
                                   </button>
                                   <button type="button" name="delete" class="btn btn-icon btn-danger btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="/admin/locals/showDelete/{{ $value->id }}" data-title="Eliminar Profesor">
                                       <i class="icon wb-trash" aria-hidden="true"></i>
                                   </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <!-- End Panel Basic -->
        </div>
    </div>
@endsection

@section('scripts')

    @include('admin.layout.partials.modal')

    {!! Html::script('template/vendor/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('template/vendor/datatables-bootstrap/dataTables.bootstrap.js') !!}
    {!! Html::script('template/vendor/datatables-responsive/dataTables.responsive.js') !!}
    {!! Html::script('template/vendor/datatables-tabletools/dataTables.tableTools.js') !!}
    {!! Html::script('template/js/components/datatables.js') !!}
    {!! Html::script('assets/vendor/filament-tablesaw/tablesaw.js') !!}
    {!! Html::script('general/js/my.table.js') !!}
    {!! Html::script('template/vendor/formvalidation/formValidation.min.js') !!}
    {!! Html::script('template/vendor/formvalidation/framework/bootstrap.min.js') !!}
@endsection
