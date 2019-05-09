<?php

/* @var $text string */

use yii\helpers\Html;
use yii\helpers\StringHelper;

?>

<?=StringHelper::truncateWords(Html::encode($text), 12)?>
