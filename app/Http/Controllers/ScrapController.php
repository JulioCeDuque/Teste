<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScrapController extends Controller
{

    public function scrap(){

        $client = new Client();

        for ($mais = 1; $mais <=10; $mais++) {
            $url = "https://www.questmultimarcas.com.br/estoque?pagina=$mais";
            $page = $client->request('GET', $url);
            
            $page->filter('.card-car')->each(function ($item) {
                $this->nome[$item->filter('div')->text()] = $item->filter('a')->attr('href');
            });

            $data = $this->nome;
            
        }

        return view('scrap', compact('data'));
    }

    public function saveItem(Request $request) {
        
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect('/');
    }
    
}

            // for ($dois = 2; $dois <=100; $dois++) {
            // $page->filter(".results div:nth-child($dois) > div > a")->each(function ($sim) {
            //     $link = $sim->extract(array('href'));
            //     // print_r ($link);
            // });
            // }