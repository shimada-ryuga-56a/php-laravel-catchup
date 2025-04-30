@extends('layouts.application')

@section('content')
<h1>投稿一覧</h1>
@role('admin')
  <a href="{{route('tags.create')}}">＋ タグを作成</a>
@endrole
<ul>
  @forelse ($posts as $post)
    <li>
      <a href="{{ route('posts.show', $post) }}">
        {{$post -> title}}
      </a>
    </li>
  @empty
    <li>
      投稿がありません。
    </li>
  @endforelse
</ul>

@endsection