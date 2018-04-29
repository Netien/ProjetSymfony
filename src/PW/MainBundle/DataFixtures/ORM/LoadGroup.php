<?php

namespace PW\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PW\MainBundle\Entity\Groupe;

class LoadGroup implements FixtureInterface
{
    
  public function load(ObjectManager $manager)
  {
    // Liste des titres à ajouter
    $titres = array(
      'Un groupe sans pretention',
      'Le meilleur des groupes',
      'Le meilleur des meilleurs des groupes',
    );

    $pseudoLeader = 'Anna';

    $description = 'On essaye de faire un projet';


    foreach ($titres as $titre) {
      $group = new Groupe();
      $group->setTitre($titre);
      $group->setDescription($description);
      $group->setPseudoLeader($pseudoLeader);
      $manager->persist($group);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}