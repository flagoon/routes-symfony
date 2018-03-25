<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 10:02
 */
declare(strict_types=1);
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Model\Weather;

class DefaultController extends Controller
{
    public function index()
    {
        $weather = new Weather();
        return $this->render('index.html.twig', [
            'temperature' => $weather->getTemperature()
        ]);
    }
}
