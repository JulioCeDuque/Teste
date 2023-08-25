<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScrapController extends Controller
{

    public function scrap(){

        $client = new Client();
        // $url = 'https://www.questmultimarcas.com.br/estoque';
        // $page = $client->request('GET', $url);
        $allItems = [];

        for ($mais = 1; $mais <=10; $mais++) {
            $url = "https://www.questmultimarcas.com.br/estoque?pagina=$mais";
            $page = $client->request('GET', $url);
            
            $page->filter('.card-car')->each(function ($item) {
                $this->results[$item->filter('div')->text()] = $item->filter('.car-description')->text();
            });
    
            $data = $this->results;
        }

        // dd($data);

        // echo "<pre>";
        // print_r($page);

        // echo $page->filter('.card-car')->text();

        // $page->filter('.card-car')->each(function ($item) {
        //     $this->results[$item->filter('h3')->text()] = $item->filter('.car-description')->text();
        // });

        // $data = $this->results;

        return view('scrap', compact('data'));
    }
}


//https://www.zenrows.com/blog/web-scraping-php#advanced-techniques
