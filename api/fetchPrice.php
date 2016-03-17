<?php
function get($url){
	$ch = curl_init();
	$timeout = 60;
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_URL,$url);
	$result=curl_exec($ch);
	curl_close($ch);
	return (json_decode($result, true));
}
//FoxBit
$getMarketFOX = get('https://api.blinktrade.com/api/v1/BRL/ticker');
$lastFOX = $getMarketFOX['last'];
$volFOX = $getMarketFOX['vol'];
$bidFOX = $getMarketFOX['buy'];
$askFOX = $getMarketFOX['sell'];
$highFOX = $getMarketFOX['high'];
$lowFOX = $getMarketFOX['low'];
//BitcoinToYou
$getMarketB2U = get('https://www.bitcointoyou.com/API/ticker.ASPX');
$lastB2U = $getMarketB2U['ticker']['last'];
$volB2U = $getMarketB2U['ticker']['vol'];
$bidB2U = $getMarketB2U['ticker']['buy'];
$askB2U = $getMarketB2U['ticker']['sell'];
$highB2U = $getMarketB2U['ticker']['high'];
$lowB2U = $getMarketB2U['ticker']['low'];
//MercadoBitcoin
$getMarketMBT = get('https://www.mercadobitcoin.net/api/ticker/');
$lastMBT = $getMarketMBT['ticker']['last'];
$volMBT = $getMarketMBT['ticker']['vol'];
$bidMBT = $getMarketMBT['ticker']['buy'];
$askMBT = $getMarketMBT['ticker']['sell'];
$highMBT = $getMarketMBT['ticker']['high'];
$lowMBT = $getMarketMBT['ticker']['low'];
//NegocieCoins
$getMarketNEG = get('http://www.negociecoins.com.br/api/v3/btcbrl/ticker');
$lastNEG = $getMarketNEG['last'];
$volNEG = $getMarketNEG['vol'];
$bidNEG = $getMarketNEG['buy'];
$askNEG = $getMarketNEG['sell'];
$highNEG = $getMarketNEG['high'];
$lowNEG = $getMarketNEG['low'];
//FlowBTC
$getMarketFLW = get('https://api.flowbtc.com:8400/GetTicker/BTCBRL/');
$lastFLW = $getMarketFLW['last'];
$volFLW = $getMarketFLW['volume'];
$bidFLW = $getMarketFLW['bid'];
$askFLW = $getMarketFLW['ask'];
$highFLW = $getMarketFLW['high'];
$lowFLW = $getMarketFLW['low'];
//Total
$totalLast = ($lastFOX + $lastMBT + $lastB2U + $lastFLW + $lastNEG) / 5;
$totalVol = $volFOX + $volMBT + $volB2U + $volFLW + $volNEG;


//bitFinex
$getMarketFINEX = get('https://api.bitfinex.com/v1/ticker/btcusd');
$lastFinex = $getMarketFINEX['last_price'];
//kraken
$getPriceKraken = get('https://api.kraken.com/0/public/Ticker?pair=XBTEUR');
$lastKraken = $getPriceKraken['result']['XXBTZEUR']['c'][0];
//okCoinCNY
$getPriceOkCoin = get('https://www.okcoin.cn/api/ticker.do?symbol=btc_cny');
$lastOkCoin = $getPriceOkCoin['ticker']['last'];
