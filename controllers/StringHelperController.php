<?php

namespace app\controllers;

use yii\web\Controller;
use Faker\Provider\Lorem;

class StringHelperController extends Controller
{
    public function actionTruncateWords($text=null)
    {
        if ($text == null)
        {
            $text = Lorem::text();
        }

        return $this->render('truncate-words', ['text' => $text]);
    }

    public function actionTransliterate($text='Купи слона')
    {
        return $this->render('transliterate', ['text' => $text]);
    }
}
