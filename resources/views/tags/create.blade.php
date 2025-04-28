@extends('layouts.application')
@section('title', 'タグ作成')
@section('content')
  <h1>タグ作成</h1>
  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif
@endsection