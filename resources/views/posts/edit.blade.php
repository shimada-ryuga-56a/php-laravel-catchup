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
    <div>
      <label for="title">タイトル</label>
      <input type="text" name="title" value="{{old('title', $post->title)}}">
    </div>
    <div>
      <label for="content">本文</label>
      <textarea name="content">{{old('content', $post->content)}}</textarea>
    </div>
    <div>
      <select name="tags[]" multiple>
        @foreach ($tags as $tag)
          <option value="{{$tag->id}}">
            {{ in_array($tag->id, old('tags', $post->tags->pluck('id')->toArray())) ? 'selected' : '' }}>
            {{$tag->name}}
          </option>
        @endforeach
      </select>
    </div>
    <button type="submit">
      更新する
    </button>
  </form>

  <p><a href="{{route('posts.show', $post)}}">&laquo; 詳細に戻る</a></p>
@endsection