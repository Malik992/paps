<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Functional;

/**
 * @author Ener-Getick <egetick@gmail.com>
 */
class ConfigurationTest extends WebTestCase
{
    public function testDisabledTemplating()
    {
        $this->createClient(['test_case' => 'Templating']);
    }

    public function testToolbar()
    {
        $this->createClient(['test_case' => 'Configuration'])
            ->request(
                'GET',
                '/_profiler/empty/search/results?limit=10',
                [],
                [],
                ['HTTP_Accept' => 'application/json']
            );
    }
}
