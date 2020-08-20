<?php 
function scraping_result(){
    require_once("phpQuery-onefile.php");
    // HTMLデータを取得する
    $HTMLData = file_get_contents('https://tenki.jp/forecast/2/6/3310/3214/');
    return phpQuery::newDocument($HTMLData)->find("body")->find('.main-column')->find('.section-wrap')->find('.forecast-point-week-wrap');
}

?>
