<?php

namespace Irvyne\EmbedlyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Embedly controller.
 *
 */
class EmbedlyController extends Controller
{
    public function indexAction($url)
    {
        $embedly = $this->container->get('irvyne_embedly.service');

        return new \Symfony\Component\HttpFoundation\Response(var_dump($embedly->oembed(array(
            'url'=> $url
        ))));
    }
}