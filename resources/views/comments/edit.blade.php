@extends('layouts.application')

@section('title', 'コメント編集')

@section('content')
  <h1>コメント編集</h1>
  @if ($errors->has('body'))
    <div style="color:red">
      {{$errors->first('body')}}
    </div>
  @endif
@endsection