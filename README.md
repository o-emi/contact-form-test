# アプリケーション名
- FashionablyLate
## 環境構築
1.,開発環境をGitHubからクローン
2.,リポジトリ名を変更
3.,docker-compose up -d --build
4.,docker-compose exec php bash
5.,composer install
6.,php artisan migrate
7.,php artisan db:seed


## 使用技術(実行環境)
- Laravel Framework 8.83.8

## ER図
![ER図](./docs/er_diagram.svg)

## URL
- 開発環境：http://localhost/