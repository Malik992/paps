<?php

namespace PAPS\LivraisonBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class adminControllerTest extends WebTestCase
{
    public function testListcom()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listCom');
    }

    public function testListent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listEnt');
    }

    public function testListabo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listAbo');
    }

    public function testListcou()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listCou');
    }

    public function testAddclient()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addClient');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete');
    }

    public function testDetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/detail');
    }

}
