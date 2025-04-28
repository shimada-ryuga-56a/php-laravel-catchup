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

<h2>コメント</h2>
<ul>
  @forelse($post->comments as $comment)
  <li>
    {{$comment->body}}
    <small>
      {{$comment->created_at->format('Y-m-d H:i')}}
    </small>
  </li>
  @empty
  <li>
    まだコメントはありません。
  </li>
  @endforelse
</ul>

<h3>
  コメントを追加
</h3>
@if ($errors->has('body'))
  <div style="color:red";>
    {{$errors->first('body')}}
  </div>
@endif

<form action="{{route('posts.comments.store', $post)}}" method="POST">
  @csrf
  <textarea name="body" row="3">{{old('body')}}</textarea>
  <br>
  <button type="submit">投稿する</button>
</form>

@endsection