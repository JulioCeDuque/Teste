<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DOMDocument;

class SearchController extends Controller
{

    public function search(){
    
    // $content = file_get_contents('https://www.questmultimarcas.com.br/estoque?termo=');

    // preg_match_all('/<div class="card card-car">(.*?)<h3>(.*?)<\/h3>(.*?)<\/div>/s', $content, $mat);

    // print_r($mat);


    $html = file_get_contents('https://www.questmultimarcas.com.br/estoque?termo=');

    $domDocument = new DOMDocument();
    @$domDocument->loadHTML($html);

    $linkTags = $domDocument->getElementsByTagName("a");

    $linkList = '';

    foreach($linkTags as $link) {
        $href = $link->getAttribute('href');

        if(!empty($href)) {
            $linkList .= $link->getAttribute('href') . "<br>";
        }
    }

    echo $linkList;

    }
}
