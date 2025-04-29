@extends('layouts.application')

@section('content')
<h1>投稿作成</h1>

@include("partials.errors")

<form action="{{route('posts.store')}}" method="POST">
  @csrf
  <div>
    <label for="title">タイトル</label>
    <input type="text" name="title" value="{{old('title')}}">
  </div>
  <div>
    <label for="content">
      本文：
    </label>
    <textarea name="content">{{old('content')}}</textarea>
  </div>
  <div>
    <select name="tags[]" multiple>
      @foreach ($tags as $tag)
        <option value="{{$tag->id}}">
          {{$tag->name}}
        </option>
      @endforeach
    </select>
  </div>
  <button type="submit">投稿する</button>
  <p><a href="{{route('posts.index')}}">
    &laquo; 一覧に戻る
  </a></p>
</form>
@endsection