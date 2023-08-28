<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class BuscarController extends Controller
{

    public function buscar(Request $request){

        $client = new Client();
        $termo = $request->input('termo');
        for ($mais = 1; $mais <=10; $mais++) {
            $url = "https://www.questmultimarcas.com.br/estoque?termo=$termo&pagina=$mais";
            $page = $client->request('GET', $url);
                
            $page->filter('.card-car')->each(function ($item) {
                $this->nome[$item->filter('h3')->text()] = $item->filter('a')->attr('href');
                $carronome = $item->filter('h3')->text();
            });
        }

        $data = $this->nome;

        // dd($data);
            
      
    
    // $termo = $request->input('termo');
    
    // $resultados = NomeDoModelo::where('campo_a_ser_pesquisado', 'LIKE', '%' . $termo . '%')->get();
    
    // return view('resultados', ['resultados' => $resultados]);

        return view('buscar', compact('data'));

    }
}
