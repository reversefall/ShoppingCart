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
        $product = new Product();
        $product->setProductTitle('ASD');
        $product->setProductDescription('QWEASDZXC');
        $product->setProductKeyword('IP');
        $product->setProductImage('https://pixabay.com/link/?ua=cd3%3Dimage%26cd7%3Dvi%253Avietnam%253AVNM%26ec%3Dapi_ad%26ea%3Dnavigate%26el%3Dgetty%26tid%3DUA-20223345-1%26dr%3Dhttps%253A%252F%252Fwww.google.com%252F&next=https%3A%2F%2Fwww.istockphoto.com%2Fphoto%2Flandscape-with-halong-bay-gm1201281530-344439656%3Futm_source%3Dpixabay%26utm_medium%3Daffiliate%26utm_campaign%3DSRP_image_sponsored%26utm_content%3Dhttps%253A%252F%252Fpixabay.com%252Fvi%252Fimages%252Fsearch%252Fvietnam%252F%26utm_term%3Dvietnam&hash=9085e8967e20737dd433c4407c038cd547413591&=');
        $product->setProductPrice('23');
        $product->setDate(\DateTime::createFromFormat('Y-m-d', '1995-05-25'));
        $product->setStatus("true");
        $manager->persist($product);
        $manager->flush();
    }
}
