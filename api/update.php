<?php
require_once 'fetchPrice.php';

$data = [
  'timestamp' => time(),
    'total' => [
        'last' => $totalLast,
        'volume' => $totalVol,
        'fiat' => [
            'usd' => $lastFinex,
            'eur' => $lastKraken,
            'cny' => $lastOkCoin
        ]
    ],

    'data' => [
      [
          'exchange' => 'FoxBit',
          'volume' => $volFOX,
          'last' => $lastFOX,
          'bid' => $bidFOX,
          'ask' => $askFOX,
          'high' => $highFOX,
          'low' => $lowFOX,
      ],
      [
          'exchange' => 'MercadoBitcoin',
          'volume' => $volMBT,
          'last' => $lastMBT,
          'bid' => $bidMBT,
          'ask' => $askMBT,
          'high' => $highMBT,
          'low' => $lowMBT,
      ],
      [
          'exchange' => 'BitcoinToYou',
          'volume' => $volB2U,
          'last' => $lastB2U,
          'bid' => $bidB2U,
          'ask' => $askB2U,
          'high' => $highB2U,
          'low' => $lowB2U,
      ],
      [
          'exchange' => 'NegocieCoins',
          'volume' => $volNEG,
          'last' => $lastNEG,
          'bid' => $bidNEG,
          'ask' => $askNEG,
          'high' => $highNEG,
          'low' => $lowNEG,
      ],
      [
          'exchange' => 'FlowBTC',
          'volume' => $volFLW,
          'last' => $lastFLW,
          'bid' => $bidFLW,
          'ask' => $askFLW,
          'high' => $highFLW,
          'low' => $lowFLW,
      ],
    ]
];

$data_json = json_encode($data);
$fp = fopen('data.json', 'w');
fwrite($fp, $data_json);
fclose($fp);
