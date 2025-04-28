@extends('layouts.application')
@section('title', 'タグ編集')
@section('content')
  <h1>タグ編集</h1>
  <ul>
    @foreach ($errors->all() as $error)
      <li>
        {{$error}}
      </li>
    @endforeach
  </ul>
@endsection