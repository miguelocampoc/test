@extends('layouts.base')

@section('content')

<p>Edit report {{$report->id}}</p>

<form action="/expense_reports/{{$report->id}}" method="POST">
@csrf
@method('delete')
<div class="from-group">
      <button type="submit">Delete</button>
</div>
</form>
<a href="/expense_reports">Back</a>
@endsection
