<?php
require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [ 'debug' => true ]);

// Tableau des équipes
$teams = [
    [
        'image' => './img/php-M2-J8-exercice-twig-angry-owls.png',
        'nom' => 'ANGRY OWLS',
        'description' => 'A team of ANGRY OWLS'
    ],
    [
        'image' => './img/php-M2-J8-exercice-twig-chatty-parrots.png',
        'nom' => 'CHATTY PARROTS',
        'description' => 'A team of chatty parrots.'
    ],
    [
        'image' => './img/php-M2-J8-exercice-twig-panthers.png',
        'nom' => 'PANTHERS',
        'description' => 'A team of Panthers'
    ],
    [
        'image' => './img/php-M2-J8-exercice-twig-sparrow.png',
        'nom' => 'SPARROW',
        'description' => 'The spies from the east'
    ],
    [
        'image' => './img/php-M2-J8-exercice-twig-vendetta.png',
        'nom' => 'VENDETTA',
        'description' => 'A knack for revenge'
    ]
];

// Passer le tableau à Twig
echo $twig->render("teams.html.twig", [
    'teams' => $teams
]);
?>