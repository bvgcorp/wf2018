# wf2018
WirForce 2018

## 系統需求
* Apache(or Nginx)
* PHP 5.6+
* 免資料庫

## 安裝
1. 將所有檔案上傳至web server
2. 編輯 config.php, 更改base_url即完成安裝

## 特別感謝LOGO設定
1. 編輯 inc/inc_logo.php
2. LOGO圖片上傳至 img/thank
3. LOGO規格：378px*100px，PNG

## 媒體報導頁
* 檔案 news.php
* 資料陣列 inc/data.news.php
* 已使用AJAX擷取 https://api.4gamers.com.tw/v1/news/tag/WirForce?page=1

## 其他
* 頁面Metadata設定：inc/inc_meta.php
* 主選單、Header設定：inc/inc_header.php
* 主要樣式變更於檔案 css/wirforce.css
* 其他額外js與Footer或埋GA Code請編輯:inc/inc_footer.php
