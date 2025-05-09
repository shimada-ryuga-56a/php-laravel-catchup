# 【コマンド関係】
## 🍠Laravel関連
* サーバー立ち上げ
  `php artisan serve`
* tinkerでの操作開始
  `php artisan tinker`
## 🍠MVC関連
* ルーティング確認
  `php artisan route:list`
* コントローラ作成
  `php artisan make:controller XxxController`
  オプションは下記の通り。
  * `--resource`：リソースを自動設定。
* モデル作成
  `php artisan make:model Xxx`
  オプションは下記の通り。
  * `-m`：マイグレーションファイルも生成。
  * `-c`：コントローラファイルも生成。
  * `-mc`：マイグレーションファイルとコントローラファイルの同時生成。
  * `-r`：生成するコントローラに`resources`を含める。
* マイグレーション関連
  * テーブル作成
    `php artisan make:migration create_xxx_table --create=xxxs`
    ⚠️中間テーブルは複数形にしない！
  * 既存のテーブル構造変更（例はカラム追加）
    `php artisan make:migration add_column_to_ssss_table --table=xxxs`

# 【Laravelにおけるパーシャルの扱い方】
* `@yield`：親ビュー内で用いる。**子ビューが特定の名前の`section`名を定義していたら、**親ビューに挿入する。
* `@include`：どのビューでも使用できる。指定したBladeファイルを、そのまま挿入する。

# 【フラッシュメッセージの理解】
## 🍠セッションについて
* セッションとは、あるユーザーがサイトを訪問している間の、一時的なデータの置き場のことである。
* ブラウザとサーバーはそれぞれセッションIDを保持し、それをもとにログイン情報や一時的なメッセージを保持することができる。

## 🍠Laravelの`session`ヘルパー
便利関数！
`session(['key' => 'value'])`のように配列を渡すことで、永続的にデータを保持できる。
`session('key')`でデータを読み込むことができる。

## フラッシュデータ
セッションデータのうち、「次のリクエストまでしか保持されない」ものをフラッシュデータと呼ぶ。
```
session()->flash('success', '投稿が作成されました。');
```
上記のようにすることで、次のリクエストまでしか保持されない、フラッシュデータを設定することができる。`session('key')`、今回は`session('success')`で呼び出しができる。

# 【マイグレーションファイルの書き方】
## 子モデルの書き方
```
$table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
```
* `constrained('posts')`はどのモデルの子要素かを指定する。
* `onDelete('cascade')`は親要素が削除された際に連鎖的に削除する。