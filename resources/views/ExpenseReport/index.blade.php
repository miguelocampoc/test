@extends('layouts.base')
@section('content')
<table>
@foreach($expenseReports as $expenseReport)
<tr>
    <td>
       <a href="/expense_reports/{{$expenseReport->id}}"> {{$expenseReport->title}}</a>
    </td>
    <td>
        <a href="/expense_reports/{{$expenseReport->id}}/edit" >Editar</a>
    </td>
    <td>
        <a href="/expense_reports/{{$expenseReport->id}}/confirmDelete" >Eliminar</a>
    </td>
</tr>
@endforeach
</table>
<a href="expense_reports/create">create a new report</a>

@endsection
