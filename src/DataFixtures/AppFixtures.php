<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $task = new Product();
            $task
                ->setName('Product ' . $i + 1)
                ->setDescription('Description ' . $i + 1)
                ->setPrice($i * 10)
                ->setSku($i * 10)
                ->setStock($i * 10)
                ->setCreatedAt(new \DateTimeImmutable())
                ->setUpdatedAt(new \DateTimeImmutable())
                ->setActive(true);
            $manager->persist($task);
        }

        $manager->flush();

    }
}
