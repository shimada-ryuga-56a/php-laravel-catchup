@extends('layouts.application')
@section('title', 'タグ編集')
@section('content')
  <h1>タグ編集</h1>
  @include("partials.errors")

  <form action="{{route('tags.update', $tag)}}" method="POST">
    @csrf @method('PUT')
    <label for="name">タグ名：</label>
    <input type="text" name="name" value="{{old('tag', $tag->name)}}"></input>
    <button type="submit">更新</button>
  </form>
@endsection