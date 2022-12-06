<?php

namespace App\Tests;

use App\Entity\Visite;
use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author karin
 */
class VisiteTest extends TestCase{
    public function testGetDatecreationString(){
        $visite = new Visite();
        $visite->setDatecreation(new DateTime("2022-04-14"));
        $this->assertEquals("14/04/2022", $visite->getDatecreationString());
    }
    public function testAddEnvironnement (){
        $environnement = new Environnement ();
        $environnement->setNom("plage");
        $visite = new visite();
        $visite -> addEnvironnement($environnement);
        $nbEnvironnementAvant = $visite->getEnvironnements()->count();
        $visite -> addEnvironnement ( $environnement);
        $nbEnvironnementApres = $visite->getEnvironnements()->count ();
        $this->assertEquals( $nbEnvironnementAvant, $nbEnvironnementApres , "ajouté même environnement devrait échouer");
    }
}
