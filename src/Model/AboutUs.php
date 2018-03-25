<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 11:41
 */

namespace App\Model;

class AboutUs
{
    private $aboutUs;
    public function __construct()
    {
        $url = 'https://pl.wikipedia.org/w/api.php?action=query&prop=extracts&format=json&exintro=&titles=Google';
        $this->aboutUs = json_decode(file_get_contents($url),true);
    }

    public function aboutUs()
    {
        return $this->aboutUs['query']['pages']['122531']['extract'];
    }
}
