@extends('layouts.application')

@section('content')
<h1>投稿一覧</h1>
@role('admin')
  <a href="{{route('tags.create')}}">＋ タグを作成</a>
@endrole

<h1 class="text-2xl font-heading mb-6">投稿一覧</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  @forelse ($posts as $post)
    <x-card :title="$post->title">
      <p class="mb-4">{{ Str::limit($post->content, 100) }}</p>
      <x-button as="a" href="{{ route('posts.show', $post) }}">
        詳細を見る
      </x-button>
    </x-card>
  @empty
    <p>投稿がありません。</p>
  @endforelse
</div>
@endsection