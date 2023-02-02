<?php

require_once 'model/Experience.php';

$exp1 = new Experience("Apple",5,"patron bla bkla bla ");
$exp2 = new Experience("Samsung",5,"patron bla bkla bla ");
$exp3 = new Experience("Apple",5,"patron bla bkla bla ");

$experiences = [$exp1, $exp2, $exp3];

/*
$experiences = [
    [
        "titre"=>"Apple",
        "duree"=>5,
        "desc" =>"patron bla bkla bla "
    ],
    [
        "titre"=>"Samsung",
        "duree"=>5,
        "desc" =>"patron bla bkla bla "
    ],
    [
        "titre"=>"chez moi",
        "duree"=>5,
        "desc" =>"patron bla bkla bla "
    ]
];*/


include "views/experiences.phtml";

/*

1- model class Experience(doit contenir l'ensemble des prop ) getter (pour récupérer leur valeurs)
2- require_once dans le controller pour importer la classe
3- créer des instances ($exp1 = new Experience("Apple",5,"patron bla bkla bla ");)
4- ajouter une liste qui va contenir l'ensmble des instances ($experiences = [$exp1, $exp2, $exp3];)
5- dans phtml foreach pour afficher la liste
6- utiliser les getter pour afficher les informations

*/