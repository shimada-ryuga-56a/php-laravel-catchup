# 【コマンド関係】
## 🍠アプリ内
* サーバー立ち上げ
  `php artisan serve`
## Laravel全般
* ルーティング確認
  `php artisan route:list`
* コントローラ作成
  `php artisan make:controller XxxController --resource`
* モデル作成
  `php artisan make:model Xxx`

# 【Laravelにおけるパーシャルの扱い方】
* `@yield`：親ビュー内で用いる。**子ビューが特定の名前の`section`名を定義していたら、**親ビューに挿入する。
* `@include`：どのビューでも使用できる。指定したBladeファイルを、そのまま挿入する。