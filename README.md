# Laravel 10 每次測試完快速重置資料庫

引入 plannr 的 laravel-fast-refresh-database 套件來擴增每次測試完快速重置資料庫，其實不需要在每次運行測試時都運行資料庫重置，只需在建立遷移檔或修改既有遷移時運行。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __test__ 來執行測試。
```sh
$ php artisan test
```

----

## 畫面截圖
![](https://i.imgur.com/GwViKwP.png)
> 當沒做任何修改時，測試會繼續使用相同的資料庫而不重置