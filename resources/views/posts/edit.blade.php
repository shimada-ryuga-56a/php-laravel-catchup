@extends('layouts.application')

@section('title', '投稿編集')

@section('content')
  <h1>投稿編集</h1>
  @if($errors -> any())
    <div style="color:red;">
      <ul>
        @foreach($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('posts.update', $post)}}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">
      更新する
    </button>
  </form>

  <p><a href="{{route('posts.show', $post)}}">&laquo; 詳細に戻る</a></p>
@endsection