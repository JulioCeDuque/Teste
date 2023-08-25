<?php


$bmw = file_get_contents('https://www.questmultimarcas.com.br/estoque?termo=bmw');

preg_match_all('/<div class="card card-car">(.*?)<img src="(.*?)" \/>(.*?)<\/div>/s', $bmw, $matches);

print_r($matches)

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