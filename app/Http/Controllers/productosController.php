<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class productosController extends Controller
{
    public function getProducts()
    {
        $client = new Client(['base_uri' => 'http://localhost/apiProductos/public/']);
        $response = $client->request('GET', 'getProduct'); 
        $body = $response->getBody();
        $content =$body->getContents();
        $productos = json_decode($content,TRUE);
        
        //var_dump($productos);
        //die();

        return view('welcome', ['productos'=>$productos]);
  
    }
}
