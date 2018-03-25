<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 12:40
 */

namespace App\Model\Contact;

class Cerberus
{
    private $person;
    public function __construct()
    {
        $this->person = [
            "name" => $_POST["name"],
            "age" => $_POST["age"],
            "access" => false
            ];
    }

    public function showData(){
        if ($this->person['age'] > 18) {
            $this->person['access'] = true;
        }
        return $this->person;
    }
}
