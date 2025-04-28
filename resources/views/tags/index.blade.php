@extends('layouts.application')
@section('title', 'タグ一覧')
@section('content')
  <h1>タグ一覧</h1>
  <p><a href="{{route('tags.create')}}">+ 新しいタグを作成</a></p>
  <ul>
    @forelse ($tags as $tag)
      <li>
        {{$tag->name}}
      </li>
    @empty
      <li>まだタグがありません</li>
    @endforelse
  </ul>
@endsection