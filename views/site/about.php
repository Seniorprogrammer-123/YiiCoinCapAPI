<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Coincap.io API';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Symbol</th>
                <th>Supply</th>
                <th>maxSupply</th>
                <th>marketCapUsd</th>
                <th>volumeUsd24Hr</th>
                <th>priceUsd</th>
                <th>changePercent24Hr</th>
                <th>vwap24Hr</th>
                <th>explorer</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($datas as $data){
        ?>
            <tr>
                <td><?= Html::encode($data['rank'])?></td>
                <td><?= Html::encode($data['name'])?></td>
                <td><?= Html::encode($data['symbol'])?></td>
                <td><?= Html::encode($data['supply'])?></td>
                <td><?= Html::encode($data['maxSupply'])?></td>
                <td><?= Html::encode($data['marketCapUsd'])?></td>
                <td><?= Html::encode($data['volumeUsd24Hr'])?></td>
                <td><?= Html::encode($data['priceUsd'])?></td>
                <td><?= Html::encode($data['changePercent24Hr'])?></td>
                <td><?= Html::encode($data['vwap24Hr'])?></td>
                <td><?= Html::encode($data['explorer'])?></td>
            </tr>
        <?php 
            }
        ?>
        </tbody>
    </table>

    <code><?= __FILE__ ?></code>
</div>
