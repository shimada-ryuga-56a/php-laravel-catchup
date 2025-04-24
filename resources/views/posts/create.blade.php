@extends('layouts.application')

@section('content')
<h1>投稿作成</h1>

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
  <button type="submit">投稿する</button>
  <p><a href="{{route('posts.index')}}">
    &laquo; 一覧に戻る
  </a></p>
</form>
@endsection