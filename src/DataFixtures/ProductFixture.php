<?php

namespace App\DataFixtures;

use App\Entity\Product;
use DateTimeInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++){
        $product = new Product;
        $product->setProductTitle('Demo');
        $product->setProductDescription('BLABLABLABLA');
        $product->setProductKeyword('SS');
        $product->setProductImage('https://tintuc.hoang-phuc.com/wp-content/uploads/2021/12/hinh-nen-dep-20.jpg');
        $product->setProductPrice('40');
        $product->setDate(\DateTime::createFromFormat('Y-m-d', '2020-10-15'));
        $product->setStatus("true");
        $manager->persist($product);
    }   
    $manager->flush();
}
}
