<?php

namespace App\DataFixtures;

use App\Entity\Peinture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PeintureFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 3; $i++){
            $peinture = new Peinture();
            
        }

        $manager->flush();
    }
}
