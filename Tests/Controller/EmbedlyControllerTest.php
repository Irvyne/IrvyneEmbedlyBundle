<?php

namespace Irvyne\EmbedlyBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmbedlyControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/_embedly/oembed');

        $this->assertTrue($crawler->filter('html:contains("https://github.com")')->count() > 0);
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/_embedly/oembed/http://google.fr');

        $this->assertTrue($crawler->filter('html:contains("https://github.com")')->count() > 0);
    }
}
