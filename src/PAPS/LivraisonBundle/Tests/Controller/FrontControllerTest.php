<?php

namespace PAPS\LivraisonBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testAddclient()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addClient');
    }

    public function testAddlivraison()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addLivraison');
    }

    public function testPostuler()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/postuler');
    }

    public function testContrat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contrat');
    }

}
