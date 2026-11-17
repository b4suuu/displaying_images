<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>displaying images</title>
<style>
    body {
	margin: 0px;
	background-color: #000000;
	padding-bottom: 30px;
	display: flex;
    flex-direction: column;
    align-items: center; 
    justify-content: center; 
	
}

.foto {
        border: 25px solid white;
        display: block;
        margin: 20px auto; 
        width: auto; 
    }

.foto img {
	display: block;
	max-width: 100%;
	height: auto;

    }
</style>
</head>
<body>

<?php
// Ścieżka do katalogu ze zdjęciami
$sciezka_katalogu = 'img/';

// Pobieranie wszystkich plików z rozszerzeniem .jpg
$zdjecia = glob($sciezka_katalogu . '*.jpg');

// Sortowanie zdjęć według daty utworzenia od najnowszego do najstarszego
// usort($zdjecia, function($a, $b) {
//    return filectime($b) - filectime($a);
// });

// Sortowanie zdjęć alfabetycznie według nazwy pliku
sort($zdjecia);

// Wyświetlanie każdego zdjęcia
foreach ($zdjecia as $zdjecie) {
    echo '<div class="foto"><img src="' . $zdjecie . '" alt="' . basename($zdjecie) . '"></div>';
}
?>

</body>
</html>