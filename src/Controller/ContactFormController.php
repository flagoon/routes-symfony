<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 12:36
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Model\Contact\Cerberus;

class ContactFormController extends Controller
{
    public function show()
    {
        return $this->render('form.html.twig');
    }

    public function post()
    {
        $cerberus = new Cerberus();
        $accessPerson = $cerberus->showData();
        \dump($accessPerson);
        return $this->render('post.html.twig', [
            'name' => $accessPerson['name'],
            'access' => $accessPerson['access']
        ]);
    }
}
