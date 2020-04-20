<?php


require '../vendor/autoload.php'; // On en a pas besoin ici, c'est seulement utile si tu créer des classes comme en quête 1 et 2 de Composer
// Template's render
$loader = new Twig\Loader\FilesystemLoader('../src/View'); // Là, on dit à notre index.php d'aller chercher les fichiers de template (.twig) dans le dossier ../src/View
$twig = new Twig\Environment($loader); // Là, on créer un objet avec les infos de la ligne précédente. Ca va faire marcher Twig.
// On déclare notre tableau $product
$products = ['Fraise', 'Pomme', 'Orange', 'Caralho', 'Raisin'];
// Puis on rajoute une ligne pour indiquer comment générer les pages twig
echo $twig->render('index.html.twig', ['products' => $products]);