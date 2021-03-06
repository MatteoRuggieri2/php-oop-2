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

$jeans = new Clothes('Jeans Levis', 89.99, 10, 'XL');

$tshirt = new Clothes('T-shirt Nike', 39.99, 15, 'L');
$tshirt->vote = 5;

$uncharted = new Games('Uncharted - La fine di un ladro', 29.00, 7, 'PS4');
$uncharted->vote = 5;

$crashBandicoot = new Games('Crash Bandicoot', 26.90, 10, 'XBOX');
$crashBandicoot->vote = 4;


// USERS
$allUsers = [];

try {
    $john = new Customer('John', 'Verdi', 'john.verdi@gmail.it', '6548965');
} catch(Exception $e) {
    
    // Scrivo nel file di log.
    error_log($e);

    // Scrivo un messaggio in pagina
    echo '<h2>Abbiamo riscontrato un problema nei nostri server. Torneremo al più presto.</h2>';
    die();
}
$allUsers[] = $john;    // Aggiungo l'utente nella lista degli acquirenti
$john->toBuy($mouse);
$john->toBuy($keyboard);

$gianni = new Manager('Gianni', 'Bianchi', 'gianni.bianchi@gmail.it', '4985664', 'Junior');
$allUsers[] = $gianni;    // Aggiungo l'utente nella lista degli acquirenti
$gianni->toBuy($crashBandicoot);

$piero = new Manager('Piero', 'Rossi', 'piero.rossi@gmail.it', '9876653', 'Senior');
$allUsers[] = $piero;    // Aggiungo l'utente nella lista degli acquirenti
$piero->toBuy($tshirt);
$piero->toBuy($jeans);
$piero->toBuy($keyboard);
$piero->toBuy($uncharted);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    <main>
        <h1>Utenti che hanno acquistato oggi:</h1>
        <ul>
            
            <!-- Stampo per ogni utente le info di acquisto -->
            <?php foreach($allUsers as $singleUser) { ?>
                <li>
                    <h2><?php echo $singleUser->getName() ?></h2>
                    <h4>Ordine effettuato il: <?php echo $singleUser->orderDate ?></h4>
                    <h4>Metodo di pagamento: carta</h4>
                    <h4>Oggetti acquistati:</h4>
                    <ul>
                        <?php foreach($singleUser->getBasket() as $product) { ?>
                            <li><?php echo $product->name ?></li>
                        <?php } ?>
                    </ul>
                    <h3>Totale: <?php echo $singleUser->totalBasketPrice() ?></h3>
                </li>
            <?php } ?>
            
        </ul>
    </main>
</body>
</html>