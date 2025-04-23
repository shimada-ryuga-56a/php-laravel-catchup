<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿詳細</title>
  </head>
  <body>
    <h1>
      {{ $post->title }}
    </h1>
    <p>
      {{ $post->content }}
    </p>
    <p>
      <a href="{{route('posts.index')}}">&laquo; 一覧に戻る</a>
    </p>
  </body>
</html>