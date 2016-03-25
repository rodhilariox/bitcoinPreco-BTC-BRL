<?php
echo "<meta http-equiv='refresh' content='0;url=update.php'>";
require_once 'fetchPrice.php';

if ($getMarketFOX['last'] != null) {
    $dataFOX = [
      'exchange' => 'FoxBit',
      'last' => $getMarketFOX['last'],
      'volume' => $getMarketFOX['vol'],
      'bid' => $getMarketFOX['buy'],
      'ask' => $getMarketFOX['sell'],
      'low' => $getMarketFOX['low'],
      'high' => $getMarketFOX['high'],
    ];
} else {
    $dataFOX = null;
}

if ($getMarketB2U['ticker']['last'] != null) {
    $dataB2U = [
      'exchange' => 'BitcoinToYou',
      'last' => $getMarketB2U['ticker']['last'],
      'volume' => $getMarketB2U['ticker']['vol'],
      'bid' => $getMarketB2U['ticker']['buy'],
      'ask' => $getMarketB2U['ticker']['sell'],
      'low' => $getMarketB2U['ticker']['low'],
      'high' => $getMarketB2U['ticker']['high'],
    ];
} else {
    $dataB2U = null;
}

if ($getMarketMBT['ticker']['last'] != null) {
    $dataMBT = [
      'exchange' => 'MercadoBitcoin',
      'last' => $getMarketMBT['ticker']['last'],
      'volume' => $getMarketMBT['ticker']['vol'],
      'bid' => $getMarketMBT['ticker']['buy'],
      'ask' => $getMarketMBT['ticker']['sell'],
      'low' => $getMarketMBT['ticker']['low'],
      'high' => $getMarketMBT['ticker']['high'],
    ];
} else {
    $dataMBT = null;
}

if ($getMarketNEG['last'] != null) {
    $dataNEG = [
      'exchange' => 'NegocieCoins',
      'last' => $getMarketNEG['last'],
      'volume' => $getMarketNEG['vol'],
      'bid' => $getMarketNEG['buy'],
      'ask' => $getMarketNEG['sell'],
      'low' => $getMarketNEG['low'],
      'high' => $getMarketNEG['high'],
    ];
} else {
    $dataNEG = null;
}

if ($getMarketFLW['last'] != null) {
    $dataFLW = [
      'exchange' => 'FlowBTC',
      'last' => $getMarketFLW['last'],
      'volume' => $getMarketFLW['volume24hr'],
      'bid' => $getMarketFLW['bid'],
      'ask' => $getMarketFLW['ask'],
      'low' => $getMarketFLW['low'],
      'high' => $getMarketFLW['high'],
    ];
} else {
    $dataFLW = null;
}

$data = [
  'timestamp' => time(),
    'total' => [
        'last' => $totalLast,
        'volume' => $totalVol,
        'fiat' => [
            'usd' => $getMarketFINEX['last_price'],
            'eur' => $getPriceKraken['result']['XXBTZEUR']['c'][0],
            'cny' => $getPriceOkCoin['ticker']['last']
        ]
    ],

    'data' => [
        $dataFOX,
        $dataB2U,
        $dataMBT,
        $dataNEG,
        $dataFLW

    ]
];

$data_json = json_encode($data);
$fp = fopen('data.json', 'w');
fwrite($fp, $data_json);
fclose($fp);
