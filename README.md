# php_unit_sample

## composer で DL
`composer require --dev phpunit/phpunit ^7`

下記ができる
```
-rw-r--r--   1 hatoritakuya  staff     63 Jun  2 13:57 composer.json
-rw-r--r--   1 hatoritakuya  staff  50109 Jun  2 13:58 composer.lock
drwxr-xr-x  14 hatoritakuya  staff    448 Jun  2 13:58 vendor
```

## TODO MEMO
1. `hoge`クラスをテストするならば`hogeTest`クラスを作成する
2. `PHPUnit\Framework\TestCase` を継承します。
3. `test*`という名前のクラスを作成 or `@test`のアノテーションをつけてテストメソッドということを宣言する
4. テストメソッドの中でアサーションメソッドを使用してテストを行う。

## 実行コマンド
`vendor/bin/phpunit stackTest`

### 実行結果
```
PHPUnit 7.2.2 by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: 29 ms, Memory: 4.00MB

OK (3 tests, 5 assertions)
```

## 参考
http://phpunit.readthedocs.io/ja/latest/writing-tests-for-phpunit.html
https://phpunit.de/getting-started/phpunit-7.html
