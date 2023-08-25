<?php


$html = file_get_contents('https://www.questmultimarcas.com.br/estoque?termo=bmw');

// $html = file_get_contents('https://www.questmultimarcas.com.br/estoque');

preg_match_all('/<div class="card card-car">(.*?)<img src="(.*?)" \/>(.*?)<\/div>/s', $html, $matches);

dd($html);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



</body>
</html>