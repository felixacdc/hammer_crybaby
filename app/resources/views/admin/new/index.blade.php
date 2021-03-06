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

@section('newsMenu', 'active')

@section('content')
    <!-- Page -->
    <div class="page" >
        <div class="page-content">
            @include('admin.layout.partials.alertSuccess')
            @include('admin.layout.partials.alertErrors')
            <!-- Panel Basic -->
            <div class="panel">
                <header class="panel-heading">
                    <h3 class="panel-title">Locales</h3>
                </header>
                <div class="panel-body">
                    <table class="table tablesaw table-hover dataTable table-striped tablesaw-swipe tablesaw-fix-persist" data-tablesaw-mode="swipe" data-tablesaw-minimap="" id="table-9456" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th data-tablesaw-priority="persist" class="tablesaw-cell-persist">No.</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Facebook</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locals as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->facebook }}</td>
                                <td class="text-center">
                                    <button type="button" name="show" class="btn btn-icon btn-success btn-sm loadModal" data-toggle='modal' data-target='#generalModal' data-url="/admin/news/showNews/{{ $value->id }}" data-title="Ver Noticias">
                                        <i class="icon wb-eye" aria-hidden="true"></i>
                                    </button>
                                   <button type="button" name="edit" class="btn btn-icon btn-info btn-sm loadModal loadNews" data-toggle='modal' data-target='#generalModal' data-url="/admin/news/create" data-title="Crear Noticia" data-id="{{ $value->id }}">
                                       <i class="icon wb-pencil" aria-hidden="true"></i>
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

    <script>
        $('.loadNews').on('click', function(e){
            e.preventDefault();
            id_local = $(this).data('id');
        });
    </script>
@endsection
