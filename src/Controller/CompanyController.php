<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 11:35
 */

namespace App\Controller;

use App\Model\AboutUs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CompanyController extends Controller
{
    public function aboutUs()
    {
        $aboutUs = new AboutUs();
        return $this->render('aboutUs.html.twig', [
            'info' => $aboutUs->aboutUs()
        ]);
    }
}
