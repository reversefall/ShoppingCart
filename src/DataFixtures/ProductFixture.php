<?php

namespace App\DataFixtures;

use DateTimeInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;


class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $titles = ["Mobile","TV","Laptop","Headphones"];
        for ($i = 1; $i <= 20; $i++){
        $key = array_rand($titles,1);
        $product = new Product;
        $product->setProductTitle($titles[$key]);
        $product->setProductDescription('QWEASDZXC');
        $product->setProductKeyword('IP');
        $product->setProductImage('Mobile.jpg');
        $product->setProductPrice('23');
        $product->setDate(\DateTime::createFromFormat('Y-m-d', '1995-05-25'));
        $product->setStatus("true");
        $manager->persist($product);
    }   
    $manager->flush();
}
}
