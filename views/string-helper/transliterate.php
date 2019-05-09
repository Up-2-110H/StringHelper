<?php

/* @var $text string */

use yii\helpers\Html;
use yii\helpers\Inflector;

?>

<?=Inflector::transliterate(Html::encode($text))?>
