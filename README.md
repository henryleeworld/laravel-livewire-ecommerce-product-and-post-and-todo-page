# Laravel 10 Livewire 電子商務商品、貼文和待辦詳情

萬事起步難，但老實說，建立電商到經營電商的每個步驟，都有許多各自要鑽研的功夫！曝光商品可以說是整個經營電商的過程中，最核心的關鍵，互動式的貼文能夠拉近使用者，使用者也能藉此感受同樣問題時，其他使用者特別的反應，使用高效的待辦事項清單和筆記進行協助完成工作。

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
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，讓公用可存取的檔案維持在一個目錄中。
```sh
$ php artisan storage:link
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/srYfDJj.png)
> 選對了商品，等同於有了好的基礎，就能夠讓電商經營事半功倍

![](https://i.imgur.com/XdvQkU8.png)
> 長貼文適合應用於新產品的發行或促銷活動，短貼文則適合用來和追蹤者日常的交流

![](https://i.imgur.com/OR2oDvk.png)
> 確保不會忘記任何事項，並能有效地規劃工作
