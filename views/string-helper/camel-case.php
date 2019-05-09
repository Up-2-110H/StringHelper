<?php

/* @var $text string */

use yii\helpers\Html;
use yii\helpers\StringHelper;

?>

<?=
implode(
    StringHelper::explode(
        Html::decode($text),
        '_',
        function($value) {
            return StringHelper::mb_ucfirst($value);
        }
    )
)
?>
