<?php
/**
 * Created by PhpStorm.
 * User: flagoon
 * Date: 25.03.18
 * Time: 13:53
 */

namespace App\Controller;

use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PetStoreController extends Controller
{
    public function getOrder($id)
    {
        $url = 'http://petstore.swagger.io/v2/store/order/' . $id;
        $client = new Client();
        try {
            $response = $client->request('get', $url);
        } catch (\Exception $e) {
            return $this->render('petstore.html.twig', [
                'status' => 'there was an error'
            ]);
        }

        $data = json_decode($response->getBody(), true);

        return $this->render('petstore.html.twig', [
            'status' => $data["complete"] ? 'zrealizowane' : 'w trakcie'
        ]);

    }
}
