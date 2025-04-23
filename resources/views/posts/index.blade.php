<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
  </head>
  <body>
    <h1>投稿一覧</h1>
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
  </body>
</html>