<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 15:19
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LangController extends Controller
{
    public function changeLanguage($lang)
    {
        $langController = new LangConfig();
        $config = $langController->getTranslations();
        if ($lang === 'pl') {
            $otherlang = 'en';
        } else {
            $otherlang = 'pl';
        }
        return $this->render('lang.html.twig', [
            'title' => $config[$lang]['title'],
            'body' => $config[$lang]['body'],
            'footer' => $config[$lang]['footer'],
            'button' => $otherlang
        ]);
    }
}
