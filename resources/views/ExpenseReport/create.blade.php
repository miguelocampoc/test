@extends('layouts.base')

@section('content')

<p>New report</p>

<form action="/expense_reports" method="POST">
@csrf
<div class="from-group">
    <input type="text" name="title" value="{{old('title')}}"></input>
      <button type="submit">Submit</button>
</div>
@if($errors->any())
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
</form>
<a href="./">Back</a>
@endsection
