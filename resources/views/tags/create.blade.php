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

  <form action="{{route('tags.store')}}" method="POST">
    @csrf
    <div>
      <label for="name">タグ名：</label>
      <input type="text" name="name" value="{{old('name')}}"></input>
      <button type="submit">作成</button>
    </div>
  </form>
@endsection