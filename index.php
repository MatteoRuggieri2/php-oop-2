<!-- CONSEGNA -->
<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie 
per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti 
da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio 
ci potrebbero essere degli utenti premium che hanno diritto a degli sconti 
esclusivi, oppure diverse tipologie di prodotti.
Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente. -->


<?php 

require_once __DIR__ . '/TechItem.php';
require_once __DIR__ . '/Clothes.php';
require_once __DIR__ . '/Games.php';

$mouse = new TechItem('Corsair M65 ELITE', 69.99, 50);
$mouse->vote = 4;
var_dump($mouse);

$keyboard = new TechItem('Corsair K70 RGB MK.2', 179.99, 75);
var_dump($keyboard);

$jeans = new Clothes('Levis', 89.99, 10, 'XL');
var_dump($jeans);

$tshirt = new Clothes('Nike', 39.99, 15, 'L');
$tshirt->vote = 5;
var_dump($tshirt);

$uncharted = new Games('Uncharted - La fine di un ladro', 29.00, 7, 'PS4');
$uncharted->vote = 5;
var_dump($uncharted);

$crashBandicoot = new Games('Crash Bandicoot', 26.90, 10, 'XBOX');
$crashBandicoot->vote = 5;
var_dump($crashBandicoot);

?>