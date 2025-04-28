@extends('layouts.application')
@section('title', 'タグ一覧')
@section('content')
  <h1>タグ一覧</h1>
  <p><a href="{{route('tags.create')}}">+ 新しいタグを作成</a></p>
  <ul>
    @forelse ($tags as $tag)
      <li>
        {{$tag->name}}
        <a href="{{route('tags.edit', $tag)}}"><button>編集</button></a>
        <form action="{{route('tags.destroy', [$tag])}}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
          @csrf @method('DELETE')
          <button>削除</button>
        </form>
      </li>
    @empty
      <li>まだタグがありません</li>
    @endforelse
  </ul>
@endsection