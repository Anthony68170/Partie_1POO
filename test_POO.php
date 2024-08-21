<?php
// créer un OBJET (ex : Ordinateur) à l'aide du mot "class"
// nommer l'objet; ici "Ordinateur"
Class Ordinateur{

// Attribuer un ATTRIBUT "public, private ou protected" selon le besoin
// L'attribut est toujours lié à un élément particulier qu'il faut nommer
  private $_marque;

// Si l'attribut est PRIVE, il est uniquement accessible depuis sa classe où il est déclaré
  private $_modele;

// marque, modele, ecran, ... s'inscrivent avec 1 underscores exemple _lumière
  private $_ecran;


  private $_statut = 0;

// Lorsque l'attribut est PUBLIC, il est accessible depuis n'importe où dans l'application, et reste visible par tout le monde
// Création d'une function (METHODE), ici "allumer" l'ordinateur
  public function allumer(){

// On peut appeler une METHODE avec $this suivi de -> puis le nom de la méthose, ici $_statut
    $this->_statut = 1;
}
}
$poste = new Ordinateur();

// On appelle avec "$poste" la function (allumer) d'une classe "ici l'ordinateur"
$poste->allumer();

// Si l'attribut est protégé, il est uniquement accessible par sa classe et les sous-classes