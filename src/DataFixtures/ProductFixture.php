<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class ProductFixture extends Fixture
{

    public function load(ObjectManager $manager): void
    {
            $product1 = new product();
            $product1->setProductTitle('SamSung')
                ->setProductDescription('TheThe Samsung Galaxy Flip 4 is a good folding phone that feels one generation shy of hitting stride')
                ->setProductKeyword('SS')
                ->setProductImage('https://images.samsung.com/vn/smartphones/galaxy-z-flip4/images/galaxy-z-flip4_highlights_kv.jpg')
                ->setProductPrice('999')
                ->setDate(\DateTime::createFromFormat('Y-m-d', '2020-10-15'))
                ->setStatus("true");
            $manager->persist($product1);

            $product2 = new product();
            $product2->setProductTitle('Iphone')
                ->setProductDescription('DAY LA IPHONE')
                ->setProductKeyword('IP')
                ->setProductImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq1wPYXBH9otqHc02myG3yWeYqsVumGBr-KA&usqp=CAU')
                ->setProductPrice('1100')
                ->setDate(\DateTime::createFromFormat('Y-m-d', '2022-04-06'))
                ->setStatus("true");
            $manager->persist($product2);

            $product3 = new product();
            $product3->setProductTitle('Oppo')
                ->setProductDescription('DAY LA OPPO')
                ->setProductKeyword('OP')
                ->setProductImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSccF0h9gcE06Y08wPTHEfx22yr_9yz31yJ9w&usqp=CAU')
                ->setProductPrice('599')
                ->setDate(\DateTime::createFromFormat('Y-m-d', '2018-05-05'))
                ->setStatus("false");
            $manager->persist($product3);

            $product4 = new product();
            $product4->setProductTitle('Huawei')
                ->setProductDescription('Bing Chilling')
                ->setProductKeyword('Wei')
                ->setProductImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaBPHCNKP03Gcr1gUHnim1Nme7FpZqsszzyg&usqp=CAU')
                ->setProductPrice('200')
                ->setDate(\DateTime::createFromFormat('Y-m-d', '2020-09-09'))
                ->setStatus("true");
            $manager->persist($product4);

            $product5 = new product();
            $product5->setProductTitle('XiaoMi')
                ->setProductDescription('Bing Chilling Galaxy')
                ->setProductKeyword('Wei')
                ->setProductImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeSYC_ZxCaN8u2sHI0-WhnxrzXswIpmeaC3Q&usqp=CAU')
                ->setProductPrice('444')
                ->setDate(\DateTime::createFromFormat('Y-m-d', '2020-06-03'))
                ->setStatus("true");
            $manager->persist($product5);
        $manager->flush();
    }
}





        // $product = new Product
