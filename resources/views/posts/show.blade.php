@extends('layouts.application')

@section('content')

<h1>
  {{ $post->title }}
</h1>
<p>
  {{ $post->content }}
</p>
<p>
  <a href="{{route('posts.index')}}">&laquo; 一覧に戻る</a>
</p>

<form action="{{route('posts.destroy', $post)}}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
  @csrf @method('DELETE')
  <button type="submit">削除する</button>
</form>

@endsection