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

require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Manager.php';

// PRODUCTS

$mouse = new TechItem('Corsair M65 ELITE', 69.99, 50);
$mouse->vote = 4;

$keyboard = new TechItem('Corsair K70 RGB MK.2', 179.99, 75);

$jeans = new Clothes('Levis', 89.99, 10, 'XL');

$tshirt = new Clothes('Nike', 39.99, 15, 'L');
$tshirt->vote = 5;

$uncharted = new Games('Uncharted - La fine di un ladro', 29.00, 7, 'PS4');
$uncharted->vote = 5;

$crashBandicoot = new Games('Crash Bandicoot', 26.90, 10, 'XBOX');
$crashBandicoot->vote = 4;


// USERS
$john = new Customer('John', 'Verdi', 'john.verdi@gmail.it', '6548965');
$john->toBuy($mouse);
$john->toBuy($keyboard);
var_dump($john);

$gianni = new Manager('Gianni', 'Bianchi', 'gianni.bianchi@gmail.it', '4985664', 'Junior');
$gianni->toBuy($crashBandicoot);
var_dump($gianni);

$piero = new Manager('Piero', 'Rossi', 'piero.rossi@gmail.it', '9876653', 'Senior');
$piero->toBuy($tshirt);
$piero->toBuy($jeans);
$piero->toBuy($keyboard);
$piero->toBuy($uncharted);
var_dump($piero);

?>