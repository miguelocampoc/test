@extends('layouts.base')

@section('content')

<p>New report</p>

<form action="/expense_reports" method="POST">
@csrf
<div class="from-group">
    <input type="text" name="title"></input>
      <button type="submit">Submit</button>
</div>
</form>
<a href="./">Back</a>
@endsection
