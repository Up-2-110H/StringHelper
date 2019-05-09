<?php

/* @var $text string */

use yii\helpers\Html;
use yii\helpers\Inflector;

?>

<?=Inflector::camelize(Html::encode($text))?>
