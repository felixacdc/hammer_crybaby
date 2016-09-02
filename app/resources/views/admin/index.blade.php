@extends('admin.layout.template')

@section('styles')
    <!-- Plugin -->
    {!! Html::style('template/vendor/datatables-bootstrap/dataTables.bootstrap.css') !!}
    {!! Html::style('template/vendor/datatables-responsive/dataTables.responsive.css') !!}
@endsection

@section('inicioMenu', 'active')

@section('content')
    <h1>Hola =)</h1>
@endsection

@section('scripts')
    {!! Html::script('template/vendor/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('template/vendor/datatables-bootstrap/dataTables.bootstrap.js') !!}
    {!! Html::script('template/vendor/datatables-responsive/dataTables.responsive.js') !!}
    {!! Html::script('template/vendor/datatables-tabletools/dataTables.tableTools.js') !!}
    {!! Html::script('template/js/components/datatables.js') !!}
    {!! Html::script('general/js/my.table.js') !!}
@endsection
