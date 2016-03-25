<?php
function get($url){
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_URL,$url);
	$result=curl_exec($ch);
	curl_close($ch);
	return (json_decode($result, true));
}
//
$getMarketFOX = get('https://api.blinktrade.com/api/v1/BRL/ticker');
$getMarketB2U = get('https://www.bitcointoyou.com/API/ticker.ASPX');
$getMarketMBT = get('https://www.mercadobitcoin.net/api/ticker/');
$getMarketNEG = get('http://www.negociecoins.com.br/api/v3/btcbrl/ticker');
$getMarketFLW = get('https://api.flowbtc.com:8400/GetTicker/BTCBRL/');
$getMarketFINEX = get('https://api.bitfinex.com/v1/ticker/btcusd');
$getPriceKraken = get('https://api.kraken.com/0/public/Ticker?pair=XBTEUR');
$getPriceOkCoin = get('https://www.okcoin.cn/api/ticker.do?symbol=btc_cny');
//
$lastFOX = $getMarketFOX['last'];
$lastB2U = $getMarketB2U['ticker']['last'];
$lastMBT = $getMarketMBT['ticker']['last'];
$lastNEG = $getMarketNEG['last'];
$lastFLW = $getMarketFLW['last'];
//
$volFOX = $getMarketFOX['vol'];
$volB2U = $getMarketB2U['ticker']['vol'];
$volMBT = $getMarketMBT['ticker']['vol'];
$volNEG = $getMarketNEG['vol'];
$volFLW = $getMarketFLW['volume24hr'];
//
$foxVar = 1;
if ($lastFOX === null) {
    $foxVar = 0;
}
$b2uVar = 1;
if ($lastB2U === null) {
    $b2uVar = 0;
}
$mbtVar = 1;
if ($lastMBT === null) {
    $mbtVar = 0;
}
$negVar = 1;
if ($lastNEG === null) {
    $negVar = 0;
}
$flwVar = 1;
if ($lastFLW === null) {
    $flwVar = 0;
}
//
$totalLast=($lastFOX + $lastB2U + $lastMBT + $lastNEG + $lastFLW) / ($foxVar + $b2uVar + $mbtVar + $negVar + $flwVar);
$totalVol = $volFOX + $volB2U + $volMBT + $volNEG + $volFLW;
?>
