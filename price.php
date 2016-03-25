<?php
require_once 'data.php';
?>
<title>[<?=number_format($last,2,',','.');?>] BTC Preço</title>

<div class="container">
  <div class="row">
    <div class="col s12 m12 l4 center">
      <div class="card blue darken-4">
        <div class="white-text">
          <h3><b>R$</b> <?=number_format($last,2,',','.');?></h3>
            <p><i class="fa fa-arrow-right"></i> Último</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l4 center">
      <div class="card green darken-4">
        <div class="white-text">
          <h3><i class="fa fa-btc"></i> <?=number_format($volume,4,'.','');?></h3>
          <p><i class="fa fa-arrow-right"></i> Volume (24h)</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l4 center">
      <div class="card yellow darken-4">
        <div class="white-text">
          <h3><i class="fa fa-usd"></i> <?=number_format($usd,2,',','.');?></h3>
          <p><i class="fa fa-arrow-right"></i> Último (bitFinex)</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12">
      <div class="card grey darken-3 darken-4">
        <div class="white-text">
          <table class="bordered">
            <thead>
              <tr>
                  <th>Exchange</th>
                  <th>Último</th>
                  <th>Compra</th>
                  <th>Venda</th>
                  <th>Baixa</th>
                  <th>Alta</th>
                  <th>Volume (24h)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($json->data as $data) {
                if($data == null) { continue; } ?>
                <tr>
                  <td><img src="assets/img/exchanges/<?=$data->exchange;?>.png" alt="img" width="20px;"> <?=$data->exchange;?></td>
                  <td>R$ <?=number_format($data->last,2,',','.');?></td>
                  <td>R$ <?=number_format($data->bid,2,',','.');?></td>
                  <td>R$ <?=number_format($data->ask,2,',','.');?></td>
                  <td>R$ <?=number_format($data->low,2,',','.');?></td>
                  <td>R$ <?=number_format($data->high,2,',','.');?></td>
                  <td><i class="fa fa-btc"></i> <?=number_format($data->volume,4);?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <br>
        </div>
      </div>
    </div>

    <div class="col s12 m12 l6 center">
      <div class="card red darken-2">
        <div class="white-text">
          <h3><i class="fa fa-cny"></i> <?=number_format($cny,2,',','.');?></h3>
          <p><i class="fa fa-arrow-right"></i> Último (OkCoin)<br/></p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6 center">
      <div class="card blue darken-2">
        <div class="white-text">
          <h3><i class="fa fa-eur"></i> <?=number_format($eur,2,',','.');?></h3>
          <p><i class="fa fa-arrow-right"></i> Último (Kraken)</p>
        </div>
      </div>
    </div>

    <div class="col s12 m12 l12 center">
      <div class="card light-blue darken-4">
        <h6 style="color: white;"><i class="fa fa-clock-o"></i> <?php echo 'Última atualização: '.timeAgo($time).' atrás'; ?></h6>
      </div>
    </div>

  </div>
</div>
