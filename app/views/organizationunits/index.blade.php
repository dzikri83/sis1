@extends('layouts.default')
@section('content')
  <h2>Organization Units</h2>
  <hr>
  <table class="DT table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Parent</th>
        <th>Head</th>
        <th width="200px">Actions</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
  <br>
  @include('organizationunits.actions-footer', ['is_list' => true])
@stop
@section('scripts')
  <script src="{{asset('/assets/datatables/media/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/assets/datatables-bootstrap/dist/dataTables.bootstrap.js')}}"></script>
  <script>
    $('.DT').each(function(){
      var target = $(this);
      var DT = target.DataTable({
        ajax: '/organizationunits'
      });
    });
  </script>
@stop
@section('styles')
  <link rel="stylesheet" href="{{asset('/assets/datatables/media/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/datatables-bootstrap/dist/dataTables.bootstrap.css')}}">
@stop