@extends('layouts.plantilla')

<style>
    table thead {
  color: #fff;

}
table, th{
    border-collapse: collapse;
    background:#538CC8;
}
    tbody{
       border:collapse;
}
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
@section('contenido')

<div class="container abs-center">
    
    <table class="table table-responsive">
        <thead class="table-dark">
            <tr> 
                <th scope="col"><strong>Garantias</strong></th>
            </tr> 
        </thead>
        <tbody>
            <td>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Modificacion realizada</th>
                            <th>Fecha</th>
                         </tr>
                    </thead>
                    <tbody>
                    @foreach ($historials as $historials)
                    <tr>
                        <td>{{$historials->id}} </td>            
                        <td>{{$historials->user}}</td>
                        <td>{{$historials->created_at}} </td>
                    <tr>
                    @endforeach
                    </tbody>
                </table>
            </td>
        </tbody>
    </table>
</div>

@endsection




