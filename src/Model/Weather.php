<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 10:26
 */
declare(strict_types=1);
namespace App\Model;

class Weather
{

    private $weather;

    public function __construct()
    {
        $json = file_get_contents('https://danepubliczne.imgw.pl/api/data/synop/station/szczecin');
        $this->weather = json_decode($json);
    }

    public function getTemperature()
    {
        return $this->weather->temperatura;
    }
}
