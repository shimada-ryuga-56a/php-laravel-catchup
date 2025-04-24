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

@endsection