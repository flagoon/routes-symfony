<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 15:21
 */

namespace App\Controller;


class LangConfig
{
private $translation;
public function __construct()
{
    $this->translation = [
        'pl' => [
            'title' => 'Dzięki z góry',
            'body' => 'Już po ptakach',
            'footer' => 'Ni z gruszki z ni pietruszki'
        ],
        'en' => [
            'title' => 'Thanks from the mountain',
            'body' => 'It\'s after birds',
            'footer' => 'Not from pear not from parsley.'
        ]
    ];
}

public function getTranslations() {
    return $this->translation;
}
}