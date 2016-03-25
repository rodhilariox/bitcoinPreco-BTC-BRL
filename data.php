<?php
$json = json_decode(file_get_contents('api/data.json'));
//
$last = $json->total->last;
$volume = $json->total->volume;
$usd = $json->total->fiat->usd;
$cny = $json->total->fiat->cny;
$eur = $json->total->fiat->eur;
//
$time = $json->timestamp;
function timeAgo($time) {

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'ano',
        2592000 => 'mês',
        604800 => 'semana',
        86400 => 'dia',
        3600 => 'hora',
        60 => 'minuto',
        1 => 'segundo'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }
}
?>
