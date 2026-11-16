<?php

$taches = [

    [
 'id' => 1,
 'titre' => 'Créer une maquette HTML',
 'description' => 'Réaliser la structure HTML de la page d’accueil.',
 'date_limite' => '2026-11-15',
 'priorite' => 'haute',
 'terminee' => false
],
[
'id' => 2,
 'titre' => 'Intégrer les styles CSS',
 'description' => 'Appliquer les couleurs et les espacements.',
 'date_limite' => '2026-11-17',
 'priorite' => 'moyenne',
 'terminee' => false  
],
[
  'id' => 3,
 'titre' => 'Créer les fonctions PHP',
 'description' => 'Organiser les traitements de la Todo List.',
 'date_limite' => '2026-11-10',
 'priorite' => 'haute',
 'terminee' => false 
],
[
   'id' => 4,
 'titre' => 'Tester lapplication',
 'description' => 'Vérifier le bon fonctionnement et corriger les erreurs.',
 'date_limite' => '2026-11-20',
 'priorite' => 'Basse',
 'terminee' => true 
],
[
   'id' => 5,
 'titre' => 'Préparer la collection des tâches',
 'description' => 'Creer un tableau multidimensionnel avec 8 taches.',
 'date_limite' => '2026-11-12',
 'priorite' => 'moyenne',
 'terminee' => false 
],
[
   'id' => 6,
 'titre' => 'Afficher les statistiques',
 'description' => 'Calculer et afficher le total, les tâches terminées et non terminées.',
 'date_limite' => '2026-11-21',
 'priorite' => 'haute',
 'terminee' => false 
],
[
   'id' => 7,
 'titre' => 'Organiser les fichiers du projet',
 'description' => 'Créer un dossier pour le projet et y placer les fichiers (index.php, style.css),',
 'date_limite' => '2026-11-22',
 'priorite' => 'basse',
 'terminee' => true 
],
 [
    'id' => 8,
    'titre' =>'Vérifier laffichage des taches',
    'description' => 'Tester tous les cas (terminée et non terminée) et corriger le style.',
    'date_limite' => '2026-11-24',
    'priorite' => 'moyenne',
 'terminee' => false

 ]
];
$total = count($taches);


$terminees = 0;
$nonTerminees = 0;
foreach ($taches as $tache){
   if ($tache['terminee']== true) {
    $terminees++;
   }else {
        $nonTerminees++;
    }
}
require 'tempindex.php';


