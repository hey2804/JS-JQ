<!-- 示範用PHP抓取政府資料 -->
<?php

header('Content-Type: text/html; charset=utf-8');

//Opendata資料的網址（道路挖掘案件資料）
$url = "https://opendata.cwb.gov.tw/api/v1/rest/datastore/W-C0033-001?Authorization=CWB-FD936122-D58A-4DE9-B2DE-B61469F2BD90";

//取得JSON資料
$json = file_get_contents($url);

//印出資料
echo $json;

?>