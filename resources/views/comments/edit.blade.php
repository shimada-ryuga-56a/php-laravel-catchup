@extends('layouts.application')

@section('title', 'コメント編集')

@section('content')
  <h1>コメント編集</h1>
  @if ($errors->has('body'))
    <div style="color:red">
      {{$errors->first('body')}}
    </div>
  @endif

  <form action="{{route('posts.comments.update', [$post, $comment])}}" method="POST">
    @csrf
    @method("PUT")
    <textarea name="body">
      {{old('body', $comment->body)}}
    </textarea>
    <br>
    <button type="submit">
      更新する
    </button>
  </form>
@endsection