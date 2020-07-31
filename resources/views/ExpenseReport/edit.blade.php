@extends('layouts.base')

@section('content')

<p>Edit report {{$report->id}}</p>

<form action="/expense_reports/{{$report->id}}" method="POST">
@csrf
@method('put')
<div class="from-group">
    <input type="text" value="{{$report->title}}" name="title"></input>
      <button type="submit">Submit</button>
</div>
</form>
<a href="/expense_reports">Back</a>
@endsection
